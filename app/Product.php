<?php

namespace App;

use App\Http\Controllers\Admin\CategoriesController;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function images(){
        return $this->morphMany('App\Image','imageable');
    }

}
