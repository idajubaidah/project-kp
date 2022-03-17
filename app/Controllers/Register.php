<?php

namespace App\Controllers;
use App\Models\RegisterModel;
use App\Models\SatuanKerjaModel;
use App\Models\UnitKerjaModel;
use Dompdf\Dompdf;

class Register extends BaseController
{
    protected $registerModel;

    public function __construct()
    {
        $this->registerModel = new RegisterModel();
        $this->SatuanKerjaModel = new SatuanKerjaModel();
        $this->UnitKerjaModel = new UnitKerjaModel();
        
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
            'validation' => \Config\Services::validation(),
            'satuan_kerja' => $this->SatuanKerjaModel->orderBy('kd_satuan_kerja', 'DESC')->findAll()
        ];

        return view('pages/registrasi', $data);
    }

    function action()
    {
        if($this->request->getVar('action'))
        {
            $action = $this->request->getVar('action');

            if($action == 'get_unitKerja')
            {

                $unitdata = $this->UnitKerjaModel->where('kd_satuan_kerja', $this->request->getVar('kd_satuan_kerja'))->findAll();

                echo json_encode($unitdata);
            }
        }
    }

    public function daftar()
    {

        //$this->request->getVar(); //ngambil data dari form request. kalo mau ambil satu data -> ('id')


        $this->registerModel->save([
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'no_hp' => $this->request->getVar('no_hp'),
            'alamat' => $this->request->getVar('alamat'),
            'jenis_tes' => $this->request->getVar('jenis_tes'),
            'tgl_tes' => $this->request->getVar('tgl_tes'),
            'kd_satuan_kerja' => $this->request->getVar('satuan_kerja'),
            'kd_unit_kerja' => $this->request->getVar('unit_kerja')
        ]);

        $satker  = $this->request->getVar('satuan_kerja');
        $unit    = $this->request->getVar('unit_kerja');
        $db      = \Config\Database::connect();
        $builder = $db->table('registers');
        $builder->select('satuan_kerja');
        $builder->join('satuankerja', 'satuankerja.kd_satuan_kerja = registers.kd_satuan_kerja');
        $builder->where('satuankerja.kd_satuan_kerja', $satker);
        $query = $builder->get(1);
        // print_r($query);

        $builderr = $db->table('unitkerja');
        $builderr->select('unit_kerja');
        $builderr->join('registers', 'registers.kd_unit_kerja = unitkerja.kd_unit_kerja');
        $builderr->where('unitkerja.kd_unit_kerja', $unit);
        $queryy = $builderr->get(1);



        $data = [
            'title' => 'Pendaftaran Berhasil!',
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'no_hp' => $this->request->getVar('no_hp'),
            'alamat' => $this->request->getVar('alamat'),
            'jenis_tes' => $this->request->getVar('jenis_tes'),
            'tgl_tes' => $this->request->getVar('tgl_tes'),
            'satuan_kerja' => $query,
            'unit_kerja' => $queryy
            
        ];

        // session()->setFlashdata('pesan', 'Selamat! Anda berhasil mendaftar!');

        return view('pages/output', $data);
        // $html = view('pages/output', $data);

        // $filename = date('y-m-d-H-i-s'). '-bukti-pendaftaran';

        // // instantiate and use the dompdf class
        // $dompdf = new \Dompdf\Dompdf();

        // // load HTML content
        // $dompdf->loadHtml($html);

        // // (optional) setup the paper size and orientation
        // $dompdf->setPaper('A4', 'landscape');

        // // render html as PDF
        // $dompdf->render();

        // // output the generated pdf
        // $dompdf->stream($filename);

    }

    public function printpdf()
    {
        return view('pages/printpdf');
    }

    public function cari()
    {
        $data = [
            'title' => 'Pendaftaran PCR & Antigen'
        ];

        return view('pages/search', $data);
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
        $data['response'] = json_decode($response, true);
        //$tes = $data->result();
        print_r($data);
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

    public function search() 
    {

        $cari = $this->request->getVar('nik');
        $dataHasil = $this->registerModel->where('nik', $cari)->first();
        if (empty($dataHasil)) {
            // throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Anda Tidak ditemukan!');
            echo '<script>
            alert("Data yang anda cari tidak ditemukan. Silahkan lakukan pendaftaran terlebih dahulu.");
            window.location="' . base_url('/register/registrasi') . '"
            </script>';
        }

        $kd_satker = $dataHasil['kd_satuan_kerja'];
        $kd_unit = $dataHasil['kd_unit_kerja'];

        $db      = \Config\Database::connect();
        $builder = $db->table('registers');
        $builder->select('satuan_kerja');
        $builder->join('satuankerja', 'satuankerja.kd_satuan_kerja = registers.kd_satuan_kerja');
        $builder->where('satuankerja.kd_satuan_kerja', $kd_satker);
        $query = $builder->get(1);
        // print_r($query);

        $builderr = $db->table('unitkerja');
        $builderr->select('unit_kerja');
        $builderr->join('registers', 'registers.kd_unit_kerja = unitkerja.kd_unit_kerja');
        $builderr->where('unitkerja.kd_unit_kerja', $kd_unit);
        $queryy = $builderr->get(1);

        // dd($dataHasil['kd_satuan_kerja']);

                

        

        // $data = $this->SatuanKerjaModel->orderBy('kd_satuan_kerja', 'DESC')->findAll();

        echo view('pages/hasil', compact('dataHasil', 'query', 'queryy'));
        
    }


}
