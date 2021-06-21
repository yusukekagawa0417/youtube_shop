<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $fillable = [
        'good_number',
        'bad_number',
        'watching_times',
    ];

    public function comments() {
        return $this->belongsTo('App\Models\Product');
    }
}
