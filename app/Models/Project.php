<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{


    // aggiungo la relazione uno a molti con la tabella types
    public function type(){
        return $this->belongsTo(Type::class);
    }
}
