<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded =[];

    public  function questinarie(){
        return $this->belongsTo(Questionnartie::class);

    }

    public  function answers(){

        return $this->hasMany(Answer::class);

    }
}
