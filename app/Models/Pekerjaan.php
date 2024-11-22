<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    use HasFactory;

    protected $table = 'pekerjaan';
    protected $fillable = [
        'pegawai_id',
        'nip',
        'jabatan',
        'divisi',
        'tanggal_mulai_kerja',
        'status_pegawai',
        'level_senioritas',
    ];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }
}
