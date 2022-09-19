<?php

namespace App\Controllers;

use App\Models\SapiModel;
use \Hermawan\DataTables\DataTable;
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

        $data = [

            'title' => 'Daftar sapi',
            'sapi' => $this->sapiModel->get_sapi()->getResult(),
            // 'sapi' => $this->sapiModel->findAll()


        ];

        // dd($data['sapi']);

        return view('sapi/indexnew', $data);
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Daftar sapi',
            'sapi' => $this->sapiModel->getDetail($id)->getResult()
        ];
        // dd($data);
        return view('sapi/detail', $data);
    }

    public function kesehatan($id)
    {
        $data = [
            'title' => 'Daftar sapi',
            'sapi' => $this->sapiModel->getKesehatan($id)->getResult()
        ];

        // dd($data['sapi']);

        return view('sapi/kesehatan', $data);
    }
}
