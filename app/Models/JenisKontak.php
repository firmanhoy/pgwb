<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kontak;

class JenisKontak extends Model
{
    use HasFactory;
    protected $guarded =[
        'id'
    ];

   public function kontak(){
        return $this->hasMany(Kontak::class, 'jenis_id', 'id');
    }
    protected $table = 'jenis_kontak';
}
