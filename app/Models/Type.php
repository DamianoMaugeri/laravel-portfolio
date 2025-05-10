<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //aggiungo la relazione one to many

    public function projects(){

        return $this->hasMany(Project::class);
    }
}
