<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'nisn',
        'nik',
        'no_kk',
        'jenis_kelamin',
        'tanggal_lahir',
        'tempat_lahir',
        'user_id',
        'agama',
        'alamat',
        'kecamatan',
        'kelurahan',
        'asal_sekolah',
        'alamat_asal_sekolah',
        'pas_foto',
        'tinggal_dengan'
    ];
    public function parent()
    {
        return $this->hasOne(ParentStudent::class, 'student_id', 'id');
    }

    public function guardian()
    {
        return $this->hasOne(Guardian::class, 'student_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
