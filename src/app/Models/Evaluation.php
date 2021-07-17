<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $fillable = [
        'good_number',
        'bad_number',
        'watching_times',
        'channel',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
