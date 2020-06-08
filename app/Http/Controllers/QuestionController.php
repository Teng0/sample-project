<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Questionnartie;

class QuestionController extends Controller
{
    public function create(Questionnartie $questionnartie){
        return view("question.create",compact('questionnartie'));

    }
}
