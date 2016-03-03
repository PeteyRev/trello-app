<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lane extends Model
{
    public function getTasks(){
        
        return $this_hasMany("\App\Task");
    }
}
