<?php

namespace App\Repositories;

use App\Models\KhenThuong;

class KhenThuongRepository
{
    public function getAll()
    {
        return KhenThuong::all();
    }

    public function findById($id)
    {
        return KhenThuong::findOrFail($id);
    }

    public function create($data)
    {
        return KhenThuong::create($data);
    }

    public function update($id, $data)
    {
        $kt = KhenThuong::findOrFail($id);
        $kt->update($data);
        return $kt;
    }

    public function delete($id)
    {
        return KhenThuong::destroy($id);
    }
}
