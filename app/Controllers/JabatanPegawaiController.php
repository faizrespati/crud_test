<?php

namespace App\Controllers;

use App\Models\JabatanPegawaiModel;

class JabatanPegawaiController extends BaseController
{
    public function index()
    {
        $jabatanPegawaiModel = new JabatanPegawaiModel();
        $data['jabatanpegawai'] = $jabatanPegawaiModel->findAll();

        return view('jabatanpegawai/index', $data);
    }

    public function create()
    {
        return view('jabatanpegawai/create');
    }

    public function store()
    {
        $jabatanPegawaiModel = new JabatanPegawaiModel();

        $data = [
            'nama_jabatan' => $this->request->getPost('nama_jabatan')
        ];

        $jabatanPegawaiModel->insert($data);

        return redirect()->to('/jabatanpegawai');
    }

    public function edit($id)
    {
        $jabatanPegawaiModel = new JabatanPegawaiModel();
        $data['jabatanpegawai'] = $jabatanPegawaiModel->find($id);

        return view('jabatanpegawai/edit', $data);
    }

    public function update($id)
    {
        $jabatanPegawaiModel = new JabatanPegawaiModel();

        $data = [
            'nama_jabatan' => $this->request->getPost('nama_jabatan')
        ];

        $jabatanPegawaiModel->update($id, $data);

        return redirect()->to('/jabatanpegawai');
    }

    public function delete($id)
    {
        $jabatanPegawaiModel = new JabatanPegawaiModel();
        $jabatanPegawaiModel->delete($id);

        return redirect()->to('/jabatanpegawai');
    }
}
