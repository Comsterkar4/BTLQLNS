<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('nhan_vien', function (Blueprint $table) {
            $table->id();

            $table->string('ho_ten', 100);
            $table->date('ngay_sinh');

            $table->enum('gioi_tinh', ['nam', 'nu', 'khac']);

            $table->string('so_cmnd_cccd', 20)->unique();

            $table->string('dia_chi', 255)->nullable();
            $table->string('ho_khau_thuong_tru', 255)->nullable();

            $table->string('dan_toc', 50)->nullable();
            $table->string('ton_giao', 50)->nullable();

            $table->enum('tinh_trang_hon_nhan', [
                'doc_than',
                'da_ket_hon',
                'ly_hon',
                'go_vo'
            ])->nullable();

            $table->text('con_cai')->nullable();

            $table->date('ngay_vao_lam');
            $table->date('ngay_thoi_viec')->nullable();

            $table->unsignedBigInteger('phong_ban_id')->nullable();
            $table->unsignedBigInteger('chuc_danh_id')->nullable();

            $table->date('ngay_vao_doan')->nullable();
            $table->date('ngay_vao_dang')->nullable();

            $table->string('dien_chinh_sach', 100)->nullable();

            // index
            $table->index('ho_ten', 'idx_ho_ten');
            $table->index('ngay_sinh', 'idx_ngay_sinh');
            $table->index('phong_ban_id', 'idx_phong_ban');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nhan_vien');
    }
};
