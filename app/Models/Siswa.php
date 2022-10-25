<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\kontak;
use App\Models\Project;

class Siswa extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public  function kontak(){
        return $this->hasMany(Kontak::class, 'siswa_id', 'id');
    }
    public  function project(){
        return $this->hasMany(Project::class);
    }

    protected $table = 'siswa';

}
