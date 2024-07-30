<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AhsSwa extends Model
{
    use HasFactory;

    protected $table = 'ahs_swa';
    protected $fillable = [
        'noKeg',
        'noHps',
        'pekerjaan',
        'lokasi',
        'namaKasi',
        'jbtnKasi',
        'kegiatan',
        'kode',
        'satuan',
        'koefisien',
        'hrgSatuan',
        'jmlhHarga',
        'jenis'
    ];
    protected $casts = [
        'koefisien' => 'decimal:2',
        'hrgSatuan' => 'decimal:2',
        'jmlhHarga' => 'decimal:2'
    ];
}
