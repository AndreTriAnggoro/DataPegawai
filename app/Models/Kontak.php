<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    use HasFactory;

    protected $table = 'kontak';
    protected $fillable = [
        'pegawai_id',
        'nomor_hp',
        'email_pribadi',
        'email_kantor',
        'kontak_darurat',
    ];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }
}
