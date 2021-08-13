<?php

namespace App\Controllers;

use App\Models\ProjectModel;

class Artikel extends BaseController
{

	public function index()
	{
		$data['title'] = 'Rajasaland';

		$this->load->view('templates/header',$data);
        $this->load->view('artikel');
        $this->load->view('templates/footer');
	}
}
