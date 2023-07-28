<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            
            $table->unsignedBigInteger('layanan_bk_id')->require();
            $table->foreign('layanan_bk_id')->references('id')->on('layanan_bk')->onDelete('restrict');
            
            $table->string('deskripsi');
            
            $table->unsignedBigInteger('guru_id')->require();
            $table->foreign('guru_id')->references('id')->on('guru')->onDelete('restrict');
            
            $table->string('status');

            $table->unsignedBigInteger('walas_id')->require();
            $table->foreign('walas_id')->references('id')->on('walas')->onDelete('restrict');

            $table->date('tanggal_id');
            $table->string('hasil_konseling');

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $table->dropForeign(['layanan_bk_id']);
        $table->dropColumn(['layanan_bk_id']);
        $table->dropForeign(['guru_id']);
        $table->dropColumn(['guru_id']);
        $table->dropForeign(['walas_id']);
        $table->dropColumn(['walas_id']);
        Schema::dropIfExists('jadwals');
    }
};
