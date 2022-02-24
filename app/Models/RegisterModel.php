<?php

namespace App\Models;

use CodeIgniter\Model;

class RegisterModel extends Model
{
	protected $table = 'registers';
	protected $allowedFields = ['nik', 'nama', 'tgl_lahir','jenis_kelamin','no_hp','alamat','jenis_tes','tgl_tes'];

	public function cari($keyword)
	{
		$builder = $this->table("register");
		$builder->like('nik', $keyword);
		return $builder;
	}

	public function getRegister($id = false)
	{
		if ($id === false) {
			return $this->paginate(10);
		} 
			return $this->getWhere(['id' => $id]);
	}

	public function search($keyword)
	{
		// $builder = $this->table('registers');
		// $builder->like('nama', $keyword);
		// return $builder;

		return $this->table('registers')->like('nama', $keyword)->orLike('nik', $keyword);
	}
}

