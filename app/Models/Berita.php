<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'description',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function wisata()
    {
        return $this->belongsTo(Wisata::class);
    }
}
