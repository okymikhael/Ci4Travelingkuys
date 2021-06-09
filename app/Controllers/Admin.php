<?php

namespace App\Controllers;
use App\Models\Gallery;
use App\Models\Landing;

class Admin extends BaseController
{
	public function dashboard()
	{
		return view('table_image');
	}

	public function galery()
	{
		return view('table_image');
	}

	public function create_galery()
	{
		return view('form_image');
	}

	public function content()
	{
		return view('form_content');
	}

	public function add_galery(){
		$model = new Product_model();
        $data = array(
            'image'  => $this->request->getPost('alternative'),
            'image_path' => $this->request->getPost('image'),
        );
        $model->saveProduct($data);

		$upload = $this->request->getFile('image');
		$upload->move(WRITEPATH . '../public/assets/images/');

        return redirect()->to('/Admin/dashboard/galery');
	}
}
