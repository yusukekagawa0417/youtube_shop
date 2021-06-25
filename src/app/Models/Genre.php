<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = [
        'name',
        'parent_id',
    ];

    public function products()
    {
      return $this->belongsToMany(Product::class);
    }
}
