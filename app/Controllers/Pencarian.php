<?php

namespace App\Controllers;
use App\Models\RegisterModel;

class Pencarian extends BaseController
{
    public function index()
    {
        // $url="http://jsonplaceholder.typicode.com/posts/";
        // $get_url = file_get_contents($url);
        // $data = json_decode($get_url);

        // $data_array = array(
        //     'datalist' => $data
        // );
        // return view('pages/hasil',$data_array);
        $model = new RegisterModel;
        $keyword = $this->request->getVar('nik');

        $hasil = $model->search($keyword);

        $data = [
            'data' => $hasil
        ];    

        return view ('pages/pencarian', $hasil);

    }
}
