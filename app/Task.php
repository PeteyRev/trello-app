<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function getTags(){
        
        return $this->belongsToMany('\App\Tag');
    }
    
    public function getLane(){
        
        return $this->belongsTo('\App\Lane');
    }
}
