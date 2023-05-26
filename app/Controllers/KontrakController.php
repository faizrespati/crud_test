<?php

namespace App\Controllers;

use App\Models\KontrakModel;
use App\Models\PegawaiModel;

class KontrakController extends BaseController
{
    public function index()
    {
        $kontrakModel = new KontrakModel();
        $data['kontrak'] = $kontrakModel->findAll();

        return view('kontrak/index', $data);
    }

    public function create()
{
    $pegawaiModel = new PegawaiModel();
    $data['pegawai'] = $pegawaiModel->findAll();

    return view('kontrak/create', $data);
}

public function edit($id)
{
    $kontrakModel = new KontrakModel();
    $data['kontrak'] = $kontrakModel->find($id);

    $pegawaiModel = new PegawaiModel();
    $data['pegawai'] = $pegawaiModel->findAll();

    return view('kontrak/edit', $data);
}


    public function store()
    {
        $kontrakModel = new KontrakModel();

        $data = [
            'pegawai_id' => $this->request->getPost('pegawai_id'),
            'tanggal_mulai' => $this->request->getPost('tanggal_mulai'),
            'tanggal_selesai' => $this->request->getPost('tanggal_selesai')
        ];

        $kontrakModel->insert($data);

        return redirect()->to('/kontrak');
    }

    public function update($id)
    {
        $kontrakModel = new KontrakModel();

        $data = [
            'pegawai_id' => $this->request->getPost('pegawai_id'),
            'tanggal_mulai' => $this->request->getPost('tanggal_mulai'),
            'tanggal_selesai' => $this->request->getPost('tanggal_selesai')
        ];

        $kontrakModel->update($id, $data);

        return redirect()->to('/kontrak');
    }

    public function delete($id)
    {
        $kontrakModel = new KontrakModel();
        $kontrakModel->delete($id);

        return redirect()->to('/kontrak');
    }
}
