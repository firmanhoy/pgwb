<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa;

class Kontak extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
     public function jenis(){
        
        return $this->belongsTo(JenisKontak::class, 'jenis_id', 'id');
    }
    public function siswas(){
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }

    protected $table = 'kontak';
}
