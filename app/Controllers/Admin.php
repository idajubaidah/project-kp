<?php

namespace App\Controllers;
use App\Models\RegisterModel;
use App\Models\SatuanKerjaModel;
use App\Models\UnitKerjaModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->registerModel = new RegisterModel();
        $this->SatuanKerjaModel = new SatuanKerjaModel();
        $this->UnitKerjaModel = new UnitKerjaModel();
        
    }



    public function index()
    {
        $model = new RegisterModel;
        $data = [
            'title' => 'Selamat Datang Admin | Kementrian Kesehatan',
            'getRegister' => $model->getRegister(),
            'pcr' => $model->pcr(),
            'antigen' => $model->antigen(),
            'total' => $model->total()
        ];
        return view('admin/dashboard', $data);
    }

    public function tampil() {

        $model = new RegisterModel;

        $pager = \Config\Services::pager();

        $db      = \Config\Database::connect();

        // $id = $model->select('kd_satuan_kerja')->findAll();
        $builder = $db->table('registers');
        $builder->select('*');
        $builder->join('satuankerja', 'satuankerja.kd_satuan_kerja = registers.kd_satuan_kerja');
        $builder->join('unitkerja', 'unitkerja.kd_unit_kerja = registers.kd_unit_kerja');
        $query = $builder->get();

        // print_r($reg);die;

        $currentPage = $this->request->getVar('page_registers') ? $this->request->getVar('page_registers') : 1;

        $keyword = $this->request->getVar('keyword');
        if($keyword){
            $model->search($keyword);
        } else {
            $dataRegister = $model;
        }
        
        $data['title'] = 'Data Register | Kementrian Kesehatan';
        // $data['getRegister'] = $model->paginate(5, 'registers');
        $data['getRegister'] = $model->getData();
        $data['pager'] = $model->pager;
        $data['currentPage'] = $currentPage;
        $data['abc'] = $query;

        return view('admin/data_register', $data);
    }

    public function view() {

        $model = new RegisterModel;
        $getData = $model->getData();

        $pager = \Config\Services::pager();
        $page = (int)(($this->request->getVar('page')!==null)?$this->request->getVar('page'):1)-1;
        $perPage = 5;
        $total = count($getData);
        $pager->makeLinks($page+1, $perPage, $total);
        $offset = $page * $perPage;
        $data['result'] = $model->getData($perPage, $offset);

        $db      = \Config\Database::connect();

        $id = $model->select('kd_satuan_kerja')->findAll();
        $builder = $db->table('registers');
        $builder->select('*');
        $builder->join('satuankerja', 'satuankerja.kd_satuan_kerja = registers.kd_satuan_kerja');
        $builder->join('unitkerja', 'unitkerja.kd_unit_kerja = registers.kd_unit_kerja');
        $query = $builder->get();

        $currentPage = $this->request->getVar('page_registers') ? $this->request->getVar('page_registers') : 1;

        $keyword = $this->request->getVar('keyword');
        if($keyword){
            $model->search($keyword);
        } else {
            $dataRegister = $model;
        }
        
        $data['title'] = 'Data Register | Kementrian Kesehatan';
        // $data['getRegister'] = $model->paginate(5, 'registers');
        $data['getRegister'] = $model->paginate(5, 'registers');
        $data['pager'] = $model->pager;
        $data['currentPage'] = $currentPage;
        $data['abc'] = $query;

        return view('admin/data', $data);
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

    public function edit($id)
    {
        $model = new RegisterModel;
        $dataRegister = $model->find($id);
        if (empty($dataRegister)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Pegawai Tidak ditemukan !');
        }
        $data['register'] = $dataRegister;
        $data['title'] = 'Edit Data | Kementrian Kesehatan';
        $data['satuan_kerja'] = $this->SatuanKerjaModel->orderBy('kd_satuan_kerja', 'DESC')->findAll();
        return view('admin/edit', $data);
    }

    

    // Function update data

    public function update($id)
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
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }



        $model = new RegisterModel;
        $data = [
            'title' => 'Update Berhasil!'
        ];
        $model->update($id, [
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'no_hp' => $this->request->getVar('no_hp'),
            'alamat' => $this->request->getVar('alamat'),
            'satuan_kerja' =>$this->request->getVar('satuan_kerja'),
            'unit_kerja' => $this->request->getVar('unit_kerja'),
            'jenis_tes' => $this->request->getVar('jenis_tes'),
            'tgl_tes' => $this->request->getVar('tgl_tes')
        ]);

        session()->setFlashdata('pesan', 'Selamat! Data berhasil diupdate!');

        return redirect()->to('admin/tampil'); 
    }

    // Function delete data

    public function delete($id)
    {
        $model = new RegisterModel;
        $model->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('admin/tampil');
    }


    // function untuk export excel

    public function excel()
    {
        $model = new RegisterModel();
        $dataRegister = $model->excel();

        $spreadsheet = new Spreadsheet();

        //untuk nama header/nama kolom
        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A1', 'NIK')
        ->setCellValue('B1', 'Nama')
        ->setCellValue('C1', 'Tanggal Lahir')
        ->setCellValue('D1', 'Alamat')
        ->setCellValue('E1', 'Jenis Kelamin')
        ->setCellValue('F1', 'Satuan Kerja')
        ->setCellValue('G1', 'Unit Kerja')
        ->setCellValue('H1', 'Tanggal Tes')
        ->setCellValue('I1', 'Jenis Tes');

        $column = 2;

        foreach($dataRegister as $data){
            $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A' . $column, $data['nik'])
            ->setCellValue('B' . $column, $data['nama'])
            ->setCellValue('C' . $column, $data['tgl_lahir'])
            ->setCellValue('D' . $column, $data['alamat'])
            ->setCellValue('E' . $column, $data['jenis_kelamin'])
            ->setCellValue('F' . $column, $data['satuan_kerja'])
            ->setCellValue('G' . $column, $data['unit_kerja'])
            ->setCellValue('H' . $column, $data['tgl_tes'])
            ->setCellValue('I' . $column, $data['jenis_tes']);
            
            $column++;
        }

        //tulis dalam format .xlsx

        $writer = new Xlsx($spreadsheet);
        $fileName = 'Data Pendaftar PCR & Antigen';

        // Redirect hasil generate xlsx ke web client
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename='.$fileName.'.xlsx');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }


}
