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
        Schema::create('khen_thuong', function (Blueprint $table) {
            $table->id();
            $table->integer('nhan_vien_id');
            $table->date('ngay_quyet_dinh');
            $table->string('so_quyet_dinh', 50)->nullable();
            $table->string('hinh_thuc', 100)->nullable();
            $table->decimal('so_tien', 12, 2)->default(0);
            $table->text('ly_do')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khen_thuong');
    }
};
