<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $table = 'siswas';
    
    protected $fillable=[
        'nama',
        'nipd',
        'ttl',
        'kelas_id',
        'user_id',
        'jk',
    ];

    public function kelas(){
        return $this->belongsTo(kelas::class);
    }
    
    public function user(){
        return $this->belongsTo(user::class);
    }
    
    public function kerawanang(){
        return $this->hasMany(kerawanang::class);
    }
    
    // public function jadwal(){
    //     return $this->hasMany(jadwal::class);
    // }
    
}
