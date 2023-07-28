<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;

    // public function siswa(){
    //     return $this->hasMany(siswa::class,'kelas_id','id');
    // }
    protected $table = 'kelas';

    protected $fillable=[
        'kelas',
    ];

    public function siswa(){
        return $this->hasMany(siswa::class,'kelas_id','id');
    }
    public function walas(){
        return $this->hasMany(walas::class,'kelas_id','id');
    }
}
