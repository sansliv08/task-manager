<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = ['name'];

    // 1 category <-> N todos
    public function todos(){
        return $this->hasMany(Todo::class);
    }
}
