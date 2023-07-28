<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class walas extends Model
{
    use HasFactory;

    protected $fillable=[
            'nama',
            'user_id',
            'kelas_id',
        ];

    public function user(){
        return $this->belongsTo(User::class);
    }
        
    
    public function kelas(){
        return $this->belongsTo(kelas::class);
    }

    public function kerawanan(){
        return $this->hasMany(kerawanang::class);
    }
    
}
