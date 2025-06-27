<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'gambar_footer',
        'judul_footer',
        'alamat',
        'email',
        'hp',
        'copyright',
        'gambar_header',
        'gambar_login',
        'gambar_register',
    ];
}
