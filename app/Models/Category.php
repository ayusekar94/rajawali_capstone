<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    protected $fillable = [
<<<<<<< HEAD
        'nama',
=======
        'name',
>>>>>>> e2456f2e15597fe7471fddd44aeda0ec12198a30
    ];

    public function wisata()
    {
        return $this->hasMany(Wisata::class);
    }
}
