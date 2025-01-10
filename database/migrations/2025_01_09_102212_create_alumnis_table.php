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
        Schema::create('alumnis', function (Blueprint $table) {
            $table->id();
            $table->string('ten', 255);
            $table->string('email', 255)->nullable();
            $table->string('sdt', 255)->nullable();
            $table->string('ngaysinh', 255)->nullable();
            $table->string('lop', 255)->nullable();
            $table->string('khoa', 255)->nullable();
            $table->string('chuyennganh', 255)->nullable();
            $table->string('diachi', 255)->nullable();
            $table->string('noilamviec', 255)->nullable();
            $table->string('quequan', 255)->nullable();
            $table->string('nienkhoa', 255)->nullable();
            $table->string('hedaotao', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnis');
    }
};
