<?php

namespace App\Controllers;


use CodeIgniter\Database\Config;
use App\Models\KesehatanModel;
use App\Models\PemeriksaanModel;
use App\Models\SapiModel;

class Kesehatan extends BaseController
{

    // protected $db;
    protected $kesehatanModel;
    protected $pemeriksaanModel;
    protected $sapiModel;

    public function __construct()
    {

        $this->kesehatanModel = new KesehatanModel();
        $this->pemeriksaanModel = new PemeriksaanModel();
        $this->sapiModel = new SapiModel();
        // $this->db = \Config\Database::connect();
    }

    public function index()
    {

        $data = [

            'title' => 'Daftar kesehatan',
            'kesehatan' => $this->kesehatanModel->get_kesehatan()->getResult(),

        ];
        // dd($data);

        return view('kesehatan/index', $data);
    }


    public function create()
    {

        $data = [
            'title' => 'Form Tambah Data Kesehatan',
            'validation' => \Config\Services::validation()
        ];

        return view('kesehatan/create', $data);
    }
    public function save()
    {

        if ($this->validate([

            'penyakit' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} kesehatan harus di isi.'
                ]
            ],
            'nama_obat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} kesehatan harus di isi.'
                ]
            ],
            'jenis_obat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} kesehatan harus di isi.'
                ]
            ],
            'sex' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} kesehatan harus di isi.'
                ]
            ],
            'grade' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} kesehatan harus di isi.'
                ]
            ],
            'kedatangan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} kesehatan harus di isi.'
                ]
            ],
            'gejala' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} kesehatan harus di isi.'
                ]
            ],
            'no_kandang' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} kesehatan harus di isi.'
                ]
            ],
            'no_hospital' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} kesehatan harus di isi.'
                ]
            ],
            'tanggal_masuk' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} kesehatan harus di isi.'
                ]
            ],
            'tanggal_keluar' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} kesehatan harus di isi.'
                ]
            ]
        ])) {

            $validation = \Config\Services::validation();

            $penyakit = $this->request->getPost('penyakit');
            $obat = $this->request->getPost('nama_obat');
            $jenis = $this->request->getPost('jenis_obat');
            $sex = $this->request->getPost('sex');
            $grade = $this->request->getPost('grade');
            $kedatangan = $this->request->getPost('kedatangan');
            $gejala = $this->request->getPost('gejala');
            $kandang = $this->request->getPost('no_kandang');
            $hospital = $this->request->getPost('no_hospital');
            $tanggal_masuk = $this->request->getPost('tanggal_masuk');
            $tanggal_keluar = $this->request->getPost('tanggal_keluar');




            $data_baru = [
                'penyakit' => $penyakit,
                'obat' => $obat,
                'jenis' => $jenis,
                'sex' => $sex,
                'grade' => $grade,
                'kedatangan' => $kedatangan,
                'gejala' => $gejala,
                'no_kandang' => $kandang,
                'no_hospital' => $hospital,
                'tanggal_masuk' => $tanggal_masuk,
                'tanggal_keluar' => $tanggal_keluar,
            ];
            $this->kesehatanModel->table('kesehatan')->insert($data_baru);
            $id = $this->kesehatanModel->insertID();
            $eartag = $grade . $kedatangan . $id;
            $this->kesehatanModel->table('kesehatan')->set('eartag', $eartag)->where('id', $id)->update();


            // $datapemeriksaan = [
            //     'sex' => $this->request->getVar('sex'),
            //     'kedatangan' => $this->request->getVar('kedatangan'),
            //     'gejala' => $this->request->getVar('gejala'),
            //     'no_kandang' => $this->request->getVar('no_kandang'),
            //     'no_hospital' => $this->request->getVar('no_hospital'),
            //     'eartag' => $eartag,
            //     'id' => $id
            // ];
            // $this->pemeriksaanModel->insert($datapemeriksaan);

            // $datasapi = [
            //     'gejala' => $this->request->getVar('gejala'),
            //     'grade' => $this->request->getVar('grade'),
            //     'eartag' => $eartag,
            //     'id' => $id
            // ];
            // $this->sapiModel->insert($datasapi);

            return redirect()->to('/kesehatan')->withInput();
        }
    }
    public function detail($id)
    {
        $data = [
            'title' => 'Daftar sapi',
            'kesehatan' => $this->kesehatanModel->getDetail($id)->getResult()
        ];
        // dd($data);
        return view('kesehatan/detail', $data);
    }
    public function delete($penyakit)
    {

        $this->kesehatanModel->table('kesehatan')->delete(['penyakit' => $penyakit]);
        $this->sapiModel->table('medicalrecord')->delete(['penyakit' => $penyakit]);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');


        return redirect()->to('/kesehatan');
    }
    public function edit($id)
    {
        $data = [
            'title' => 'Form Ubah Data Pemeriksaan',
            'kesehatan' => $this->kesehatanModel->getEdit(['id' => $id])->getResult(),
            'validation' => \Config\Services::validation()
            // 'kesehatan' => $this->kesehatanModel->getEdit($id)->getResult()
        ];

        // dd($data);
        return view('kesehatan/edit', $data);
    }
    public function update($id)
    {
        // dd($this->request->getVar());
        if ($this->validate([

            'penyakit' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} kesehatan harus di isi.'
                ]
            ],
            'nama_obat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} kesehatan harus di isi.'
                ]
            ],
            'jenis_obat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} kesehatan harus di isi.'
                ]
            ],
            'sex' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} kesehatan harus di isi.'
                ]
            ],
            'kedatangan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} kesehatan harus di isi.'
                ]
            ],
            'gejala' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} kesehatan harus di isi.'
                ]
            ],
            'no_kandang' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} kesehatan harus di isi.'
                ]
            ],
            'no_hospital' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} kesehatan harus di isi.'
                ]
            ],
            'tanggal_masuk' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} kesehatan harus di isi.'
                ]
            ],
            'tanggal_keluar' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} kesehatan harus di isi.'
                ]
            ]
        ])) {

            $validation = \Config\Services::validation();

            $penyakit = $this->request->getPost('penyakit');
            $obat = $this->request->getPost('nama_obat');
            $jenis = $this->request->getPost('jenis_obat');
            $sex = $this->request->getPost('sex');
            $kedatangan = $this->request->getPost('kedatangan');
            $gejala = $this->request->getPost('gejala');
            $kandang = $this->request->getPost('no_kandang');
            $hospital = $this->request->getPost('no_hospital');
            $tanggal_masuk = $this->request->getPost('tanggal_masuk');
            $tanggal_keluar = $this->request->getPost('tanggal_keluar');




            $this->kesehatanModel->save([
                'id' => $id,
                'penyakit' => $penyakit,
                'nama_obat' => $obat,
                'jenis_obat' => $jenis,
                'sex' => $sex,
                'kedatangan' => $kedatangan,
                'gejala' => $gejala,
                'no_kandang' => $kandang,
                'no_hospital' => $hospital,
                'tanggal_masuk' => $tanggal_masuk,
                'tanggal_keluar' => $tanggal_keluar,
            ]);
            // $this->db->table('kesehatan')->update($data_baru);
            // $id = $this->kesehatanModel->insertID();
            // $this->kesehatanModel->table($this->table)->update($data_baru, array('kesehatan' => $id));
            session()->setFlashdata('pesan', 'Data Berhasil Diubah.');
            return redirect()->to('/kesehatan')->withInput();
        }
    }
}
