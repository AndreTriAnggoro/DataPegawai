<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;

    protected $table = 'pendidikan';
    protected $fillable = [
        'pegawai_id',
        'pendidikan_terakhir',
        'keahlian_teknologi',
        'bahasa_asing',
    ];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }
}
