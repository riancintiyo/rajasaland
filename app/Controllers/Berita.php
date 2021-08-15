<?php

namespace App\Controllers;

use App\Models\BeritaModel;

class Berita extends BaseController
{
	protected $berita;

	public function __construct()
	{
		$pager = \Config\Services::pager();
		$session = session();
		$validation =  \Config\Services::validation();
		$this->berita = new BeritaModel();
	}

	public function index()
	{
		$data = [
			'berita' => $this->berita->paginate(8),
			'pager' => $this->berita->pager,
		];

		return view('Home/berita', $data);
		// $this->load->view('templates/header',$data);
		// $this->load->view('berita');
		// $this->load->view('templates/footer');
	}

	public function berita()
	{
		$this->berita->orderBy('id', 'DESC');
		$data = [
			'berita' => $this->berita->findAll()
		];

		return view('Admin/berita', $data);
	}

	public function addBerita()
	{
		session();

		$data = [
			'validation' => \Config\Services::validation()
		];
		// dd(session());
		return view('Admin/addBerita', $data);
	}

	public function insertBerita()
	{
		session();

		if (!$this->validate([
			'title' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} tidak boleh kosong'
				]
			],
			'image' => [
				'rules' => 'uploaded[image]|max_size[image,5048]',
				'errors' => [
					'uploaded' => '{field} tidak boleh kosong',
					'max_size' => 'Ukuran maximal {field} adalah 5 Mb'
				]
			],
			'description' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} tidak boleh kosong'
				]
			],
			'keyword' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} tidak boleh kosong'
				]
			],
			'content' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} tidak boleh kosong',
				]
			]

		])) {
			return redirect()->to('/admin/news/add')->withInput();
		}

		// File Image
		$image = $this->request->getFile('image');
		$berkas_image = 'berita' . '-' . $image->getRandomName();
		$image->move(FCPATH . '/uploads/berita', $berkas_image);

		$data = [
			'title' => $this->request->getPost('title'),
			'image' => $berkas_image,
			'content' => $this->request->getPost('content'),
			'description' => $this->request->getPost('description'),
			'keyword' => $this->request->getPost('keyword'),
		];

		$insert = $this->berita->save($data);
		if ($insert) {
			$session = session();
			$session->setFlashdata('insert', 'success');
			return redirect()->to('/admin/news');
		} else {
			echo "error";
		}
	}
}
