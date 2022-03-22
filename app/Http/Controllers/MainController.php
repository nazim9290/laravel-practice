<?php

namespace App\Http\Controllers;
use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    //
    function sayHi(){
        return "hello World";
    }

    function homepage(){
        return view('layout');
    }

    function section(){
        return view('section');
    }

    //query db
    function allpeople(){
        // return (DB::table('people')->get());
        // return (DB::table('people')->where('id',1)->get());
        // return (DB::table('people')->where('id','>',1)->limit(2)->get());
        // return (DB::table('people')->where('id','>',1)->orderBy('id','desc')->limit(2)->get());
        return (DB::select("select id,name from people"));
    }

    function allpeoples(){
        // $people= People::all();
        // $people= People::all()->skip(1)->take(2);
        // $people= People::find(1);    
        //----id 1 is return
        // $people= People::where('id','>',1)->where('id','<',4)->get();
        //-----remember it  when you write where then you must be get function
        $people= People::whereName('kanjul hasan')->first()->displayNameAndEmail();
        // ---after where column first name is capital letter 

        $person=People::find(1); //id is 1
        $person->name="nazim uddin"; //name variable is asing;
        $person->save();   //data is save the data base

        $person = $person->fresh(); //its return the command value;

        return $person;
    }

    

}