<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'pendaftaran_id',
        'pendaftaran_type',
        'jalur',
        'status',
    ];
    public function pendaftaran()
    {
        return $this->morphTo();
    }
}
