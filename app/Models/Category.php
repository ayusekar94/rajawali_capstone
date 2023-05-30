<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
<<<<<<< HEAD
        
=======
>>>>>>> f5957e03bf91ec283d0eadaa1380e449512e8b64
        'name',
    ];

    public function wisata()
    {
        return $this->hasMany(Wisata::class);
    }
}
