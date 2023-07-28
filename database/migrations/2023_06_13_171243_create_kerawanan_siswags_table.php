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
        Schema::create('kerawanan_siswags', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nama_id')->require();
            $table->foreign('nama_id')->references('id')->on('siswas')->onDelete('restrict');
            $table->unsignedBigInteger('nipd_id')->require();
            $table->foreign('nipd_id')->references('id')->on('siswas')->onDelete('restrict');
            $table->unsignedBigInteger('jenis_kerawanan_id')->require();
            $table->foreign('jenis_kerawanan_id')->references('id')->on('jenis_kerawanans')->onDelete('restrict');
            $table->unsignedBigInteger('walas_id')->require();
            $table->foreign('walas_id')->references('id')->on('walas')->onDelete('restrict');
            $table->string('hasil_konseling');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $table->dropForeign(['walas_id']);
        $table->dropColumn(['walas_id']);
        Schema::dropIfExists('kerawanan_siswags');
    }
};

