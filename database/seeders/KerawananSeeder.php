<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\kerawanan;
use Illuminate\Support\Facades\Schema;



class KerawananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        kerawanan::truncate();

        Schema::enableForeignKeyConstraints();

        $kerawanan = [
            ['jenis_kerawanan'=>'Sering Sakit'],
            ['jenis_kerawanan'=>'Sering Ijin'],
            ['jenis_kerawanan'=>'Sering Alpha'],
            ['jenis_kerawanan'=>'Sering Terlambat'],           
            ['jenis_kerawanan'=>'Bolos'],           
            ['jenis_kerawanan'=>'Kelainan Jasmani'],           
            ['jenis_kerawanan'=>'Minat/motivasi belajar kurang'],           
            ['jenis_kerawanan'=>'Introvert/Pendiam'],           
            ['jenis_kerawanan'=>'Tinggal dengan wali'],           
            ['jenis_kerawanan'=>'Kemampuan Kurang'],           
            ['jenis_kerawanan'=>'Berkelahi'],           
            ['jenis_kerawanan'=>'Menentang Guru'],           
            ['jenis_kerawanan'=>'Menggaunggu Teman'],           
            ['jenis_kerawanan'=>'Pacaran'],           
            ['jenis_kerawanan'=>'Broken home'],           
            ['jenis_kerawanan'=>'Kondisi ekonomi kurang'],           
            ['jenis_kerawanan'=>'Pergaulan di luar sekolah'],           
            ['jenis_kerawanan'=>'Pengguna Narkoba'],           
            ['jenis_kerawanan'=>'Merokok'],           
            ['jenis_kerawanan'=>'Membiayai sekolah sendiri/bekerja'],           
        ];

        foreach ($kerawanan as $data){
            kerawanan::insert([
                'jenis_kerawanan'=> $data ['jenis_kerawanan'],
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
        }
    
    }
}
