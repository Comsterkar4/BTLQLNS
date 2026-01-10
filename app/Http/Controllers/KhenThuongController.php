<?php

namespace App\Http\Controllers;

use App\Services\KhenThuongService;
use Illuminate\Http\Request;

class KhenThuongController extends Controller
{
    protected $service;

    public function __construct(KhenThuongService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return $this->service->getAll();
    }

    public function store(Request $request)
    {
        return $this->service->create($request->all());
    }

    public function show($id)
    {
        return $this->service->find($id);
    }

    public function update(Request $request, $id)
    {
        return $this->service->update($id, $request->all());
    }

    public function destroy($id)
    {
        $this->service->delete($id);
        return response()->json(['message' => 'Đã xóa']);
    }
}
