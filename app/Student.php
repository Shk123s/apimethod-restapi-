<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   protected $table = "dataapi";
   protected $fillable = ["fname","lname","email","password"]; 
 
}
