<?php

namespace App\Models;

use CodeIgniter\Model;


class RegisterModel extends Model
{
	protected $table = 'registers';
	protected $allowedFields = ['nik', 'nama', 'tgl_lahir','jenis_kelamin','no_hp','alamat','jenis_tes','tgl_tes','kd_satuan_kerja','kd_unit_kerja'];

	public function cari($keyword)
	{
		$builder = $this->table("register");
		$builder->like('nik', $keyword);
		return $builder;
	}


	public function getData()
    {   
        return $this->table('registers')->select('*')->join('satuankerja', 'satuankerja.kd_satuan_kerja = registers.kd_satuan_kerja')->join('unitkerja', 'unitkerja.kd_unit_kerja = registers.kd_unit_kerja')->orderBy('registers.id', 'DESC')->paginate(5, 'registers');
    }

    public function excel()
    {
    	return $this->table('registers')->select('*')->join('satuankerja', 'satuankerja.kd_satuan_kerja = registers.kd_satuan_kerja')->join('unitkerja', 'unitkerja.kd_unit_kerja = registers.kd_unit_kerja')->orderBy('registers.id', 'DESC')->findAll();
    }

	public function getRegister($id = false)
	{
		if ($id === false) {
			return $this->paginate(5);
		} 
		return $this->getWhere(['id' => $id]);
	}

	public function search($keyword)
	{
		// $builder = $this->table('registers');
		// $builder->like('nama', $keyword);
		// return $builder;

		return $this->table('registers')->like('nama', $keyword)->orLike('nik', $keyword)->orLike('tgl_tes', $keyword)->orLike('jenis_tes', $keyword);
	}

	public function pcr(){
		$builder = $this->table("registers");
		// echo $builder->countAllResults();
		$builder->like('jenis_tes', 'pcr');
		return $builder->countAllResults();
		

	}

	public function antigen()
	{
		$builder = $this->table("registers");
		$builder->like('jenis_tes', 'antigen');
		return $builder->countAllResults();
	}
	public function total()
	{
		$builder = $this->table("registers");
		return $builder->countAll('jenis_tes');
	}

	public function pencarian($keyword)
	{
		return $this->table('registers')->like('nik', $keyword);
	}

	public function get_satuanKerja()
	{
		$hasil=$this->db->query("SELECT * FROM satuankerja");
		return $hasil->result();


	}

	public function get_unitKerja($kd_satuan_kerja)
	{
		$hasil = $this->db->query("SELECT * FROM unitkerja WHERE kd_satuan_kerja = '$kd_satuan_kerja'");

		$output = '<option value="">-- Unit Kerja --</option>';

		// looping data
		foreach ($hasil->result() as $row) {
            $output .= '<option value="' . $row->id . '">' . $row->unit_kerja . '</option>';
        }
        //return data 
        return $output;
	}

	public function satker($satker)
    {             
        $query =  $this->db->table('registers')
         ->join('satuankerja', 'registers.kd_satuan_kerja = satuankerja.kd_satuan_kerja')
         ->where('kd_satuan_kerja', $satker)
         ->get(1);  
        return $query;
    }
	
}

