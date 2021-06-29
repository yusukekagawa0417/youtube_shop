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

    public static function getGenreGroupsByParentId()
    {
        $genres = Genre::all();
        $genre_groups = [];
        foreach ($genres as $genre) {
            if ($genre['parent_id'] == $genre['id']) {
                $genre_groups[$genre['parent_id']]['parent'] = $genre;
            } else {
                $genre_groups[$genre['parent_id']]['children'][] = $genre;
            }
        }
        return $genre_groups;
    }
}
