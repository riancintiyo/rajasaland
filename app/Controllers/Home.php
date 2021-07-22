<?php

namespace App\Controllers;

use App\Models\ProjectModel;

class Home extends BaseController
{
	protected $project;

	public function __construct()
	{
		$this->project = new ProjectModel();
	}

	public function index()
	{
		$data = [
			'project' => $this->project->findAll()
		];
		return view('Home/home', $data);
	}

	public function project($id)
	{
		$data = [
			'project' => $this->project->find($id)
		];

		return view('Home/project', $data);
	}
}
