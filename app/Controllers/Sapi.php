<?php

namespace App\Controllers;

use App\Models\SapiModel;

use CodeIgniter\Database\Config;


class Sapi extends BaseController
{
    protected $sapiModel;

    public function __construct()
    {

        $this->sapiModel = new SapiModel();
    }

    public function index()
    {

        //    $keyword = $this->request->getVar('keyword');

        //    if($keyword){

        //        $sapi = $this->sapiModel->search($keyword);
        //    } else {
        //        $sapi = $this->sapiModel;
        //    }


        $data = [

            'title' => 'Daftar sapi',
            'sapi' => $this->sapiModel->get_sapi()->getResult()
            // 'title' => 'Daftar sapi',
            // 'sapi' => $this->sapiModel->get_sapi()->getResult()



        ];

        // dd($data['sapi']);

        return view('sapi/index', $data);
    }
    public function create()
    {

        $data = [
            'title' => 'Form Tambah Data Pemeriksaan',
            'validation' => \Config\Services::validation()
        ];

        return view('sapi/create', $data);
    }
    public function detail($eartag)
    {
        $data = [
            'title' => 'Daftar sapi',
            'sapi' => $this->sapiModel->getDetail($eartag)->getResult()
        ];

        // dd($data['sapi']);

        return view('sapi/detail', $data);
    }

    public function kesehatan($eartag)
    {
        $data = [
            'title' => 'Daftar sapi',
            'sapi' => $this->sapiModel->getKesehatan($eartag)->getResult()
        ];

        // dd($data['sapi']);

        return view('sapi/kesehatan', $data);
    }

    // public function pagination()
    // {
    //     $$data = [
    //         'title' => 'Daftar sapi',
    //         'sapi' => $this->sapiModel->paginate(1),
    //         'pager' => $this->sapiModel->pager
    //     ];

    //     // dd($data['sapi']);

    //     return view('sapi/index', $data);

    // }
}
