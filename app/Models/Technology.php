<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    
    
    
    //aggiungo relazione many to many con projects

    public function projects(){
        return $this->belongsToMany(Project::class);
    }



}
