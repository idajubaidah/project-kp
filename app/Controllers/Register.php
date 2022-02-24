<?php

namespace App\Controllers;
use App\Models\RegisterModel;


class Register extends BaseController
{
    protected $registerModel;

    public function __construct()
    {
        $this->registerModel = new RegisterModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Selamat Datang | Kementrian Kesehatan'
        ];
        return view('pages/index', $data);
    }

    public function registrasi()
    {
        // session();
        $data = [
            'title' => 'Pendaftaran PCR & Antigen',
            'validation' => \Config\Services::validation()
        ];

        return view('pages/registrasi', $data);
    }

    public function daftar()
    {

        // Validasi input
        if(!$this->validate([
            'nik' => [
                'rules' => 'required|min_length[16]|max_length[16]',
                'errors' => [
                    'required' => '{field} harus diisi!',
                    'min_length' => '{field} harus 16 karakter!',
                    'max_length' => '{field} harus 16 karakter!'
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi!',
                ]
            ],
            'tgl_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi!',
                ]
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi!',
                ]
            ],
            'no_hp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi!',
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi!',
                ]
            ],
            'jenis_tes' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi!',
                ]
            ],
            'tgl_tes' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi!',
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            //dd($validation); //mengecek apakah data sudah ditangkap
            return redirect()->to('/register/registrasi/')->withInput()->with('validation', $validation);
        }




        //$this->request->getVar(); //ngambil data dari form request. kalo mau ambil satu data -> ('id')

        $data = [
            'title' => 'Pendaftaran Berhasil!'
        ];
        $this->registerModel->save([
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'no_hp' => $this->request->getVar('no_hp'),
            'alamat' => $this->request->getVar('alamat'),
            'jenis_tes' => $this->request->getVar('jenis_tes'),
            'tgl_tes' => $this->request->getVar('tgl_tes')
        ]);

        session()->setFlashdata('pesan', 'Selamat! Anda berhasil mendaftar!');

        return view('pages/output', $data);
    }

    public function cari()
    {
        $data = [
            'title' => 'Pendaftaran PCR & Antigen'
        ];

        return view('pages/pencarian', $data);
    }

    public function pencarian()
    {
        // $keyword = $this->request->getVar('keyword');
        // if($keyword) {
        //     $this->registerModel->cari($keyword);
        // } else {
        //     echo "Data yang anda cari tidak ditemukan!";
        // }
        // $data = [
        //     'title' => 'Pendaftaran PCR & Antigen'
        // ];
        // return view('pages/hasil_pencarian', $data);



        // $url = "http://103.74.143.59/magang-trisakti/api/getPasien.php?nik=1122334455660001&kd_puskesmas=P5102012201";
        // $get_url = file_get_contents($url);
        // $data = json_decode($get_url);

        // $data_array = array(
        //     'datalist' => $data);

        // // return view('pages/hasil', $data_array);
        // var_dump($data_array);



      //   $curl = curl_init();

      //   curl_setopt_array($curl, array(
      //     CURLOPT_URL => 'http://103.74.143.59/magang-trisakti/api/getPasien.php?nik=1122334455660001&kd_puskesmas=P5102012201',
      //     CURLOPT_RETURNTRANSFER => true,
      //     CURLOPT_ENCODING => '',
      //     CURLOPT_MAXREDIRS => 10,
      //     CURLOPT_TIMEOUT => 0,
      //     CURLOPT_FOLLOWLOCATION => true,
      //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      //     CURLOPT_CUSTOMREQUEST => 'GET',
      // ));

      //   $response = curl_exec($curl);

      //   curl_close($curl);
      //   $data = json_decode($response);
      //   $data_array = array(
      //       'datalist' => $response);
      //   // echo $response;
      //   // var_dump($data_array);
      //   $this->load->view('pages/hasil', $data_array);


        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'http://103.74.143.59/magang-trisakti/api/getPasien.php?nik=1122334455660001&kd_puskesmas=P5102012201',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
          ),
      ));

        $response = curl_exec($curl);


        if(curl_errno($curl)){
            return 'Data : ' . curl_error($curl) . ' tidak ditemukan';
        }
        $data['response'] = json_decode($response);
        // print_r($data);
        // var_dump($data);

        echo view ('pages/hasil', $data);

      //   // curl_close($curl);
      //   // echo $response;

        // $url="http://103.74.143.59/magang-trisakti/api/getPasien.php?nik=1122334455660001&kd_puskesmas=P5102012201";
        // $get_url = file_get_contents($url);
        // $data = json_decode($get_url);
        // print_r ($data);

        // $data_array = array(
        //     'datalist' => $data
        // );

        // var_dump($data_array);
        // return view('pages/hasil',$data_array);

    }


}
