<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    use HasFactory;

    protected $table = 'guru';

    protected $fillable=[
        'nama',
        'user_id',
        'kelas_id',
    ];

    public function user(){
        return $this->belongsTo(user::class);
    }
    

public function kelas(){
    return $this->belongsTo(kelas::class);
}

}
