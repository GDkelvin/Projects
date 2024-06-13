<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Models\User;

class ListingController extends Controller
{
    //
    public function index(){
        //dd(request('tag'));
        $tagName = trim(request('tag')," ");
        //dd($searchStr);
        //dd($tagName);
        return view('listview',[
            'listOfInfo' => Listing::where('tags', 'LIKE', '%'.$tagName.'%')
             ->where(function ($query){ //Grouping condition 
                $searchStr = request('search');
                //dd($searchStr);
                $query->where('title', 'LIKE', '%'.$searchStr.'%')
                ->orWhere('company', 'LIKE', '%'.$searchStr.'%')
                ->orWhere('location', 'LIKE', '%'.$searchStr.'%');
             })->latest()->simplePaginate(4)
        ]);
    }
    public function show(Listing $listing){
        return view('singleListview',[
            'info' => $listing
        ]);
    }
    //show create view
    public function create(){
        return view('createListview');
    }
    //-> : use for attach a variable with an action 
    //=> : use for attach a variable to a new 'variable name'

    public function store(Request $request){
        //Validate form
        $formFields = $request->validate([
                'title' => 'required',
                'company' => ['required', Rule::unique('listings','company')],
                'location' => 'required',
                'website' => ['required','url:http,https'],
                'email' => ['required', 'email'],
                'tags' => 'required',
                'description' => 'required'
                //If anything goes wrong, we can send an error from here
        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos','public');
        }

        $formFields['user_id'] = auth()->id();

        Listing::create($formFields);

        return redirect('/list'); //we can send a message from here to the view
    }
    //show create view
    public function edit(Listing $listing){
        //dd($listing);
        return view('editListview',[
            'info' => $listing
        ]);
    }
    public function update(Request $request,Listing $listing){
        //Validate form
        $formFields = $request->validate([
                'title' => 'required',
                'company' => 'required',
                'location' => 'required',
                'website' => ['required','url:http,https'],
                'email' => ['required', 'email'],
                'tags' => 'required',
                'description' => 'required'
                //If anything goes wrong, we can send an error from here
        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos','public');
        }

        $listing->update($formFields);

        return back(); //we can send a message from here to the view
    }
    public function destroy(Listing $listing){
        $listing->delete();
        return redirect('/list/manage');
    }
    public function manage(){
        return view('manageListview',[
            'listOfInfo' => Listing::where('user_id', auth()->id())->get()
        ]);
    }
}


