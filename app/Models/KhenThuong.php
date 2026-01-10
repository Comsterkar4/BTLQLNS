<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KhenThuong extends Model
{
    protected $table = 'khen_thuong';

    protected $fillable = [
        'nhan_vien_id',
        'ngay_quyet_dinh',
        'so_quyet_dinh',
        'hinh_thuc',
        'so_tien',
        'ly_do'
    ];

    public $timestamps = false;
}
