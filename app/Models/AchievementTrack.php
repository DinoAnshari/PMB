<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AchievementTrack extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'skl_ijazah',
        'kartu_keluarga',

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

        'sertifikat_akademik_kabkota_1',
        'nilai_akademik_kabkota_1',
        'sertifikat_akademik_kabkota_2',
        'nilai_akademik_kabkota_2',
        'sertifikat_akademik_provinsi_1',
        'nilai_akademik_provinsi_1',
        'sertifikat_akademik_nasional_1',
        'nilai_akademik_nasional_1',
        'sertifikat_akademik_internasional_1',
        'nilai_akademik_internasional_1',

        'sertifikat_non_akademik_kabkota_1',
        'nilai_non_akademik_kabkota_1',
        'sertifikat_non_akademik_kabkota_2',
        'nilai_non_akademik_kabkota_2',
        'sertifikat_non_akademik_provinsi_1',
        'nilai_non_akademik_provinsi_1',
        'sertifikat_non_akademik_nasional_1',
        'nilai_non_akademik_nasional_1',
        'sertifikat_non_akademik_internasional_1',
        'nilai_non_akademik_internasional_1',

        'total_nilai_sertifikat',
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
