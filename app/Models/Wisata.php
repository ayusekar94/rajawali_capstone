<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;
    protected $table = "wisatas";
    protected $fillable = [
        'image',
        'name',
        'description',
        'price',
        'rating',
        'location',
        'id_category'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class,'id_category');
    }
}
