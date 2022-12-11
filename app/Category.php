<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function product()
    {
        return $this->hasMany(Product::class);
    }
    public function childcategory()
    {
        return $this->hasMany(ChildCategory::class);
    }
}
