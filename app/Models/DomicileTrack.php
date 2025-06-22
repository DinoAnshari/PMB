<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DomicileTrack extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'skl_ijazah',
        'kartu_keluarga',
        'dokumen_pendukung',
        'latitude',
        'longitude',
        'jarak_km',

        'rapot_kelas6_semester1',
        'nilai_b_indo_kelas6_semester1',
        'nilai_matematika_kelas6_semester1',
        'nilai_ipa_kelas6_semester1',
        'nilai_b_inggris_kelas6_semester1',
        'nilai_pai_kelas6_semester1',
        'rata_rata_kelas6_semester1',

        'rapot_kelas6_semester2',
        'nilai_b_indo_kelas6_semester2',
        'nilai_matematika_kelas6_semester2',
        'nilai_ipa_kelas6_semester2',
        'nilai_b_inggris_kelas6_semester2',
        'nilai_pai_kelas6_semester2',
        'rata_rata_kelas6_semester2',

        'rata_rata_keseluruhan',
    ];
    public function student()
    {
        return $this->hasOne(Student::class, 'user_id', 'user_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function statusPendaftaran()
    {
        return $this->morphOne(RegistrationStatus::class, 'pendaftaran');
    }
    public function statusBerkas()
    {
        return $this->morphOne(DocumentStatus::class, 'pendaftaran');
    }
}
