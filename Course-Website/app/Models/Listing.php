<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Workbench\App\Models\User;

class Listing extends Model
{
    //protected $primaryKey = 'title';   
    use HasFactory;
    //this a must
    protected $fillable = ['title','company','location','website',
    'email','tags','logo','description','user_id'];

    //Relationship
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
