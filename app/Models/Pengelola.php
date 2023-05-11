<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengelola extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password',
        'alamat',
        'noHp',
        'jenisKelamin',
        'verify'
    ];

    public function wisata()
    {
        return $this->hasMany(Wisata::class);
    }
}
