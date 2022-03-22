<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    function displayNameAndEmail(){
        echo $this->name." : ".$this->email;
    }
}


//model is a class 
//all database variable has in the perticuler model
//you can use all data base varible in model
//create function of you need;