<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kerawanan extends Model
{
    use HasFactory;

    protected $table = 'jenis_kerawanans';

    protected $fillable=[
        'jenis_kerawanan',
    ];

    public function kerawanan(){
        return $this->hasMany(kerawanang::class);
    }

}
