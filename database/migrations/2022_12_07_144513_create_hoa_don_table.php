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
        Schema::create('hoa_don', function (Blueprint $table) {
            $table->id();
            $table->date('ngayTao');
            $table->string('trangThai');
            $table->foreignId('id_users')->constrained('users');
            $table->foreignId('id_phuong_thuc_thanh_toan')->constrained('phuong_thuc_thanh_toan');
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
        Schema::dropIfExists('hoa_don');
    }
};
