<?php

namespace App\Controllers;

use App\Models\ProjectModel;

class Artikel extends BaseController
{

	public function index()
	{
		$data['title'] = 'Rajasaland';

		return view('Artikel/artikel', $data);
	}
}
