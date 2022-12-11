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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('tenSanPham');
            $table->string('tacGia');
<<<<<<< HEAD
            $table->string('image',1000);
=======
>>>>>>> c52e67d395c214ca3b30406efd69193a0e167ae2
            $table->foreignId('id_nha_xuat_ban')->constrained('nha_xuat_bans');
            $table->string('theLoai');
            $table->integer('giaSanPham');
            $table->string('maISBN');
            $table->text('moTa');
<<<<<<< HEAD
=======
            $table->foreignId('id_hinh_anh')->constrained('hinh_anhs');
>>>>>>> c52e67d395c214ca3b30406efd69193a0e167ae2
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
        Schema::dropIfExists('products');
    }
};
