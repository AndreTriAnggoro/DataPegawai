<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrasi extends Model
{
    use HasFactory;

    protected $table = 'administrasi';
    protected $fillable = [
        'pegawai_id',
        'bpjs_kesehatan',
        'bpjs_ketenagakerjaan',
        'npwp',
        'rekening_bank',
        'kontrak_kerja',
    ];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }
}
