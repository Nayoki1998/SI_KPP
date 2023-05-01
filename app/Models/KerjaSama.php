<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KerjaSama extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'perihal',
        'kategori',
        'no_surat_pihak1',
        'no_surat_pihak2',
        'tgl_surat',
        'pic_1',
        'pic_2',
        'berkas'
    ];
    public $timestamps = true;
}