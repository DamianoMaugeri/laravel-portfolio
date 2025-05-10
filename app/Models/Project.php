<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{


    // aggiungo la relazione uno a molti con la tabella types
    public function type(){
        return $this->belongsTo(Type::class);
    }

    // aggiungo la rel. molti a molti con le technologies
    public function technologies(){
        return $this->belongsToMany(Technology::class);
    }
}
