<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhap_kho', function (Blueprint $table) {
            $table->id();
            $table->date('ngayNhap');
            $table->foreignId('id_users')->constrained('users');
            $table->foreignId('id_nha_cung_cap')->constrained('nha_cung_cap');
            $table->foreignId('id_kho')->constrained('kho');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhap_kho');
    }
};
