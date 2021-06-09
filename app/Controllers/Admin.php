<?php

namespace App\Controllers;
use App\Models\Gallery;
use App\Models\Landing;

class Admin extends BaseController
{
	public function dashboard()
	{
		$model = new Gallery();
        $record['data'] = $model->getGallery();
		echo view('table_image', $record);
	}

	public function galery()
	{
		$model = new Gallery();
        $record['data'] = $model->getGallery();
		echo view('table_image', $record);
	}

	public function create_galery()
	{
		return view('form_image');
	}

	public function edit_galery()
	{
		$model = new Gallery();
		$id = $this->request->getGet('id');
        $record['data'] = $model->getGallery($id)->getRow();

		echo view('form_image_edit', $record);
	}

	public function content()
	{
		$model = new Landing();
        $record['data'] = $model->getLanding();

		echo view('form_content', $record);
	}

	public function edit_landing(){
		$model = new Landing();
        $data = array(
            'banner1'  => $this->request->getPost('banner1'),
            'banner2'  => $this->request->getPost('banner2'),
            'banner3'  => $this->request->getPost('banner3'),
            'title1'  => $this->request->getPost('title1'),
            'content1'  => $this->request->getPost('content1'),
            'content2'  => $this->request->getPost('content2'),
            'content3'  => $this->request->getPost('content3'),
            'service1'  => $this->request->getPost('service1'),
            'service2'  => $this->request->getPost('service2'),
            'service3'  => $this->request->getPost('service3'),
            'service4'  => $this->request->getPost('service4'),
            'service5'  => $this->request->getPost('service5'),
            'service6'  => $this->request->getPost('service6'),
            'contact'  => $this->request->getPost('contact'),
            'phone'  => $this->request->getPost('phone'),
            'email'  => $this->request->getPost('email'),
            'location'  => $this->request->getPost('location'),
            'footer'  => $this->request->getPost('footer'),
        );
        $model->updateLanding($data, 1);

        return redirect()->to('/Admin/content');
	}

	public function add_galery(){
		$model = new Gallery();
		$upload = $this->request->getFile('image');
		$upload->move(WRITEPATH . '../public/assets/images/');
		$name = $upload->getName();
        $data = array(
            'image'  => $this->request->getPost('alternative'),
            'image_path' => $name,
        );
        $model->saveGallery($data);

        return redirect()->to('/Admin/dashboard/galery');
	}

	public function update_galery(){
		$model = new Gallery();
		$id = $this->request->getPost('id');
		// $name = $this->request->getPost('old_image');
		$upload = $this->request->getFile('image');
		// if($upload){
			$upload->move(WRITEPATH . '../public/assets/images/');
			$name = $upload->getName();	
		// }
        $data = array(
            'image'  => $this->request->getPost('alternative'),
            'image_path' => $name,
        );
        $model->updateGallery($data, $id);

        return redirect()->to('/Admin/dashboard/galery');
	}

	public function delete_galery(){
		$id = $this->request->getGet('id');
		$model = new Gallery();
        $model->deleteGallery($id);
        return redirect()->to('/Admin/dashboard/galery');
	}
}
