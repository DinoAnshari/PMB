<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama_siswa',
        'no_hp',
        'sekolah',
        'status',
        'response',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function afirmasi()
    {
        return $this->belongsTo(AffirmationTrack::class, 'jalur_id');
    }
    public function prestasi()
    {
        return $this->belongsTo(AchievementTrack::class, 'jalur_id');
    }
    public function domisili()
    {
        return $this->belongsTo(DomicileTrack::class, 'jalur_id');
    }
}
