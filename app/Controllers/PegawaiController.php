<?php

namespace App\Controllers;

use App\Models\PegawaiModel;

class PegawaiController extends BaseController
{
    public function index()
    {
        $pegawaiModel = new PegawaiModel();
        $data['pegawai'] = $pegawaiModel->findAll();

        return view('pegawai/index', $data);
    }

    public function create()
    {
        return view('pegawai/create');
    }

    public function store()
    {
        $pegawaiModel = new PegawaiModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'jabatan_id' => $this->request->getPost('jabatan_id')
        ];

        $pegawaiModel->insert($data);

        return redirect()->to('/pegawai');
    }

    public function edit($id)
    {
        $pegawaiModel = new PegawaiModel();
        $data['pegawai'] = $pegawaiModel->find($id);

        return view('pegawai/edit', $data);
    }

    public function update($id)
    {
        $pegawaiModel = new PegawaiModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'jabatan_id' => $this->request->getPost('jabatan_id')
        ];

        $pegawaiModel->update($id, $data);

        return redirect()->to('/pegawai');
    }

    public function delete($id)
    {
        $pegawaiModel = new PegawaiModel();
        $pegawaiModel->delete($id);

        return redirect()->to('/pegawai');
    }
}
