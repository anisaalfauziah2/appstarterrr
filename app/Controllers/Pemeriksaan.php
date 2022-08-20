<?php

namespace App\Controllers;


use CodeIgniter\Database\Config;


class Pemeriksaan extends BaseController
{

    protected $db;
    public function __construct()
    {


        $this->db = \Config\Database::connect();
    }

    public function index()
    {


        // $keyword = $this->request->getVar('keyword');
        // if ($keyword) {
        //     $sapi = $this->sapiModel->search($keyword);
        // } else {
        //     $sapi = $this->sapiModel;
        // }


        $data = [

            'title' => 'Daftar sapi',
            'pemeriksaan' => $this->db->table('pemeriksaan')->get()->getResultArray()

        ];


        return view('pemeriksaan/index', $data);
    }
    public function create()
    {

        $data = [
            'title' => 'Form Tambah Data Pemeriksaan',
            'validation' => \Config\Services::validation()
        ];

        return view('pemeriksaan/create', $data);
    }
    public function save()
    {

        if ($this->validate([

            'bobot' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} pemeriksaan harus di isi.'
                ]
            ],
            'sex' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} pemeriksaan harus di isi.'
                ]
            ],
            'grade' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} pemeriksaan harus di isi.'
                ]
            ],
            'umur' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} pemeriksaan harus di isi.'
                ]
            ],
            'jenis_sapi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} pemeriksaan harus di isi.'
                ]
            ],
            'kedatangan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} pemeriksaan harus di isi.'
                ]
            ],
            'gejala' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} pemeriksaan harus di isi.'
                ]
            ],
            'no_kandang' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} pemeriksaan harus di isi.'
                ]
            ],
            'no_hospital' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} pemeriksaan harus di isi.'
                ]
            ],
            'tanggal_masuk' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} pemeriksaan harus di isi.'
                ]
            ],
            'tanggal_keluar' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} pemeriksaan harus di isi.'
                ]
            ]
        ])) {

            $validation = \Config\Services::validation();

            $bobot = $this->request->getPost('bobot');
            $sex = $this->request->getPost('sex');
            $grade = $this->request->getPost('grade');
            $umur = $this->request->getPost('umur');
            $jenis_sapi = $this->request->getPost('jenis_sapi');
            $kedatangan = $this->request->getPost('kedatangan');
            $gejala = $this->request->getPost('gejala');
            $kandang = $this->request->getPost('no_kandang');
            $hospital = $this->request->getPost('no_hospital');
            $tanggal_masuk = $this->request->getPost('tanggal_masuk');
            $tanggal_keluar = $this->request->getPost('tanggal_keluar');




            $data_baru = [
                'bobot' => $bobot,
                'sex' => $sex,
                'grade' => $grade,
                'umur' => $umur,
                'jenis_sapi' => $jenis_sapi,
                'kedatangan' => $kedatangan,
                'gejala' => $gejala,
                'no_kandang' => $kandang,
                'no_hospital' => $hospital,
                'tanggal_masuk' => $tanggal_masuk,
                'tanggal_keluar' => $tanggal_keluar,
            ];
            $this->db->table('pemeriksaan')->insert($data_baru);
            $id = $this->db->insertID();
            $eartag = $grade . $kedatangan . $id;
            $this->db->table('pemeriksaan')->set('eartag', $eartag)->where('id', $id)->update();


            return redirect()->to('/pemeriksaan')->withInput();
        }
    }
    public function detail($id)
    {
        $data = [
            'title' => 'Daftar sapi',
            'pemeriksaan' => $this->db->table('pemeriksaan')->getWhere(['id' => $id])->getResult()
        ];
        // var_dump($data['pemeriksaan']);
        // die;
        return view('pemeriksaan/detail', $data);
    }
    public function delete($id)
    {

        $this->db->table('pemeriksaan')->delete(['id' => $id]);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');

       
        return redirect()->to('/pemeriksaan');
    }
    public function edit($id)
    {
        $data = [
            'title' => 'Form Tambah Ubah Pemeriksaan',
            'validation' => \Config\Services::validation(),
            'pemeriksaan' => $this->db->table('pemeriksaan')->getWhere(['id' => $id])->getRowArray()
        ];

       
        return view('pemeriksaan/edit', $data);
    }
    public function upadte()
    {
        if ($this->validate([

            'bobot' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} pemeriksaan harus di isi.'
                ]
            ],
            'sex' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} pemeriksaan harus di isi.'
                ]
            ],
            'grade' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} pemeriksaan harus di isi.'
                ]
            ],
            'umur' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} pemeriksaan harus di isi.'
                ]
            ],
            'jenis_sapi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} pemeriksaan harus di isi.'
                ]
            ],
            'kedatangan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} pemeriksaan harus di isi.'
                ]
            ],
            'gejala' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} pemeriksaan harus di isi.'
                ]
            ],
            'no_kandang' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} pemeriksaan harus di isi.'
                ]
            ],
            'no_hospital' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} pemeriksaan harus di isi.'
                ]
            ],
            'tanggal_masuk' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} pemeriksaan harus di isi.'
                ]
            ],
            'tanggal_keluar' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} pemeriksaan harus di isi.'
                ]
            ]
        ])) {

            $validation = \Config\Services::validation();

            $bobot = $this->request->getPost('bobot');
            $sex = $this->request->getPost('sex');
            $grade = $this->request->getPost('grade');
            $umur = $this->request->getPost('umur');
            $jenis_sapi = $this->request->getPost('jenis_sapi');
            $kedatangan = $this->request->getPost('kedatangan');
            $gejala = $this->request->getPost('gejala');
            $kandang = $this->request->getPost('no_kandang');
            $hospital = $this->request->getPost('no_hospital');
            $tanggal_masuk = $this->request->getPost('tanggal_masuk');
            $tanggal_keluar = $this->request->getPost('tanggal_keluar');




            $data_baru = [
                'bobot' => $bobot,
                'sex' => $sex,
                'grade' => $grade,
                'umur' => $umur,
                'jenis_sapi' => $jenis_sapi,
                'kedatangan' => $kedatangan,
                'gejala' => $gejala,
                'no_kandang' => $kandang,
                'no_hospital' => $hospital,
                'tanggal_masuk' => $tanggal_masuk,
                'tanggal_keluar' => $tanggal_keluar,
            ];
            // $this->db->table('pemeriksaan')->update($data_baru);
            $id = $this->db->insertID();
            $this->db->table($this->table)->update($data_baru, array('pemeriksaan' => $id));

            return redirect()->to('/pemeriksaan')->withInput();
        }
    }
   
}
