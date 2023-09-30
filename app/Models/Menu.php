<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
