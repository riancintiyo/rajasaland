<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('Home/home');
	}

	public function home()
	{
		echo "Halaman Home";
	}
}
