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

    public function evaluations()
    {
        return $this->hasMany('App\Models\Evaluation');
    }

    public function genres()
    {
      return $this->belongsToMany(Genre::class);
    }
}
