<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentStudent extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'nama_ayah',
        'pekerjaan_ayah',
        'nama_ibu',
        'pekerjaan_ibu',
        'alamat',
        'no_hp'
    ];
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }
}
