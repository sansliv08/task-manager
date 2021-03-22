<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = ['name', 'description', 'category_id'];

    // N todos <-> 1 category
    public function category() {
        return $this->belongsTo(Category::class);
    }
}
