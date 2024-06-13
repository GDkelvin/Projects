<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    //Show register form
    public function register(){
        return view('user.registerView');
    }
    public function store(Request $request){
        //Validate form
        $formFields = $request->validate([
                'name' => ['required','min:3'],
                'email' => ['required', 'email',Rule::unique('users','email')],
                'password' => ['required','confirmed','min:6']  
                //If anything goes wrong, we can send an error from here
        ]);

        //Hash Password b-crypt
        $formFields['password'] = bcrypt($formFields['password']);

        //Create user 
        $user = User::create($formFields);

        //Login
        auth()->login($user);

        return redirect('/list'); //we can send a message from here to the view
    }
    public function logout(Request $request){
        //logout current user
        auth()->logout();
        //endsession
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/list'); 
    }
    public function login(){
        return view('user.loginView');
    }
    public function authority(Request $request){
        //dd($request);
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required' 
            //If anything goes wrong, we can send an error from here
    ]);
        if(auth()->attempt($formFields)){
            $request->session()->regenerate();
            return redirect('/list');
        }
        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
}
