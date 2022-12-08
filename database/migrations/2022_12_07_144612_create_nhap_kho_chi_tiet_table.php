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
        Schema::create('nhap_kho_chi_tiet', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_nhap_kho')->constrained('nhap_kho');
            $table->foreignId('id_products')->constrained('products');
            $table->integer('soLuong');
            $table->integer('gia');
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
        Schema::dropIfExists('nhap_kho_chi_tiet');
    }
};
