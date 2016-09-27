<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    public $fillable = ['username','name','password','qq','tel','sex','email'];

}
