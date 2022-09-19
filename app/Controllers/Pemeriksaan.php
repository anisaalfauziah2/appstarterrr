<?php

namespace App\Controllers;


use CodeIgniter\Database\Config;
use App\Models\PemeriksaanModel;
use App\Models\KesehatanModel;
use App\Models\SapiModel;

class Pemeriksaan extends BaseController
{

    // protected $db;
    protected $pemeriksaanModel;
    protected $kesehatanModel;
    protected $sapiModel;


    public function __construct()
    {

        $this->pemeriksaanModel = new PemeriksaanModel();
        $this->kesehatanModel = new KesehatanModel();
        $this->sapiModel = new SapiModel();
        // $this->db = \Config\Database::connect();
    }

    public function index()
    {

        $data = [

            'title' => 'Daftar pemeriksaan',
            'pemeriksaan' => $this->pemeriksaanModel->get_pemeriksaan()->getResult(),

        ];
        // dd($data);

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
            $this->pemeriksaanModel->table('pemeriksaan')->insert($data_baru);
            $id = $this->pemeriksaanModel->insertID();
            $eartag =  $grade . $kedatangan . $id;
            $this->pemeriksaanModel->table('pemeriksaan')->set('eartag', $eartag)->where('id', $id)->update();

            $kesehatan = [
                'sex' => $this->request->getVar('sex'),
                'kedatangan' => $this->request->getVar('kedatangan'),
                'gejala' => $this->request->getVar('gejala'),
                'no_kandang' => $this->request->getVar('no_kandang'),
                'no_hospital' => $this->request->getVar('no_hospital'),
                'tanggal_masuk' => $this->request->getVar('tanggal_masuk'),
                'tanggal_keluar' => $this->request->getVar('tanggal_keluar'),
                'eartag' => $eartag,
                'id' => $id
            ];
            $this->kesehatanModel->insert($kesehatan);


            $datasapi = [
                'gejala' => $this->request->getVar('gejala'),
                'eartag' => $eartag,
                'grade'  => $grade,
                'id' => $id
            ];
            $this->sapiModel->insert($datasapi);
            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');
            return redirect()->to('/pemeriksaan')->withInput();
        }
    }
    public function detail($id)
    {
        $data = [
            'title' => 'Daftar sapi',
            'pemeriksaan' => $this->kesehatanModel->getDetail($id)->getResult()
        ];
        // dd($data);
        return view('pemeriksaan/detail', $data);
    }
    public function delete($id)
    {

        $this->pemeriksaanModel->table('pemeriksaan')->delete(['id' => $id]);
        $this->kesehatanModel->table('kesehatan')->delete(['id' => $id]);
        $this->sapiModel->table('medicalrecord')->delete(['id' => $id]);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');


        return redirect()->to('/pemeriksaan');
    }
    public function edit($id)
    {
        $data = [
            'title' => 'Form Ubah Data Pemeriksaan',
            'validation' => \Config\Services::validation(),
            'pemeriksaan' => $this->pemeriksaanModel->getEdit(['id' => $id])->getRowArray()
            // 'pemeriksaan' => $this->pemeriksaanModel->table('pemeriksaan')->getWhere(['id' => $id])->getRowArray()
        ];
        // dd($data);

        return view('pemeriksaan/edit', $data);
    }
    public function update($id)
    {
        // dd($this->request->getVar());
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




            $this->pemeriksaanModel->save([
                'id'    => $id,
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
            ]);
            // $eartag = $grade . $kedatangan . $id;
            // $kesehatan = [
            //     'sex' => $this->request->getVar('sex'),
            //     'kedatangan' => $this->request->getVar('kedatangan'),
            //     'gejala' => $this->request->getVar('gejala'),
            //     'no_kandang' => $this->request->getVar('no_kandang'),
            //     'no_hospital' => $this->request->getVar('no_hospital'),
            //     'tanggal_masuk' => $this->request->getVar('tanggal_masuk'),
            //     'tanggal_keluar' => $this->request->getVar('tanggal_keluar'),
            //     'eartag' => $eartag,
            //     'id' => $id
            // ];
            // $this->kesehatanModel->insert($kesehatan);


            // $datasapi = [
            //     'gejala' => $this->request->getVar('gejala'),
            //     'eartag' => $eartag,
            //     'id' => $id
            // ];
            // $this->sapiModel->insert($datasapi);
            session()->setFlashdata('pesan', 'Data Berhasil Diubah.');
            return redirect()->to('/pemeriksaan');
            // $this->db->table('pemeriksaan')->update($data_baru);
            // $id = $this->pemeriksaanModel->insertID();
            // $this->pemeriksaanModel->table($this->table)->update($data_baru, array('pemeriksaan' => $id));

            // return redirect()->to('/pemeriksaan')->withInput();
        }
    }
}
