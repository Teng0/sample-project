<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionarieController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");

    }

    public function  create(){

        return view("questionarie.create");

    }

    public function store(Request $request){

        $data= request()->validate([
           "title"=>"required",
            "purpose"=>"required"
        ]);

        $questionnarie=auth()->user()->questionnaries()->create($data);

        return redirect("/questionnarie/".$questionnarie->id);


    }

    public  function  show(\App\Questionnartie $questionnarie){

        return view("questionarie.show",compact("questionnarie"));
    }

}
