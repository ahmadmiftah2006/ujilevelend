<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kerawanang extends Model
{
    use HasFactory;
    
    protected $table='kerawanan_siswags';

    protected $fillable=[
        'nama_id',
        'nipd_id',
        'jenis_kerawanan_id',
        'walas_id',
        'hasil_konseling',
    ];
    
    public function siswa(){
        return $this->belongsTo(siswa::class,'nama_id','id');
    }
    
    public function siswaa(){
        return $this->belongsTo(siswa::class,'nipd_id','id');
    }

    public function jenis_kerawanan(){
        return $this->belongsTo(kerawanan::class,'jenis_kerawanan_id');
    }

    public function walas(){
        return $this->belongsTo(walas::class,'walas_id','id');
    }



}
