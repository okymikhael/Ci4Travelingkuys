<?php

namespace App\Controllers;
use App\Models\Gallery;
use App\Models\Landing;

class Home extends BaseController
{
	public function index()
	{
		$gallery = new Gallery();
		$landing = new Landing();
        $record['data_landing'] = $landing->getLanding(1)->getRow();
        $record['data_gallery'] = $gallery->getGallery();
		// var_dump($record);
		echo view('home', $record);
	}
}