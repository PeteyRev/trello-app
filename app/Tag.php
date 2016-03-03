<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function getTasks() {
        
        return $this->belongsToMany('\App\Task');
    }
}
