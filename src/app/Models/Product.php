<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'asin',
        'name',
        'description',
        'url',
        'image',
    ];

    public function comments() {
        return $this->hasMany('App\Models\Evaluation');
    }
}
