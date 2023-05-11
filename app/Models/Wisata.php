<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;
    protected $table = "wisata";
    protected $fillable = [
        'image',
        'name',
        'deskripsi',
        'price',
        'rating',
        'location',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
