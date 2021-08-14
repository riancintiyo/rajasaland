<?php

namespace App\Controllers;

use App\Models\ProjectModel;

class Berita extends BaseController
{

	public function index()
	{
		$data['title'] = 'Rajasaland';

		return view('Home/berita');
		// $this->load->view('templates/header',$data);
		// $this->load->view('berita');
		// $this->load->view('templates/footer');
	}
}
