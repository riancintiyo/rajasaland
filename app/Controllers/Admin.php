<?php

namespace App\Controllers;

use App\Models\ProjectModel;

class Admin extends BaseController
{
    protected $project;
    public function __construct()
    {
        $session = session();
        $validation =  \Config\Services::validation();
        $this->project = new ProjectModel();
    }
    public function index()
    {
        return view('Admin/index');
    }

    public function project()
    {
        $data = [
            'project' => $this->project->findAll()
        ];

        return view('Admin/project', $data);
    }

    public function detailProject($id)
    {
        $data = [
            'project' => $this->project->find($id)
        ];
        return view('Admin/detail-project', $data);
    }

    public function tambahProject()
    {
        session();

        $data = [
            'validation' => \Config\Services::validation()
        ];
        // dd(session());
        return view('Admin/tambah-project', $data);
    }

    public function insertProject()
    {
        session();

        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required|min_length[50]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'min_length' => '{field} terlalu singkat, silahkan tambahkan beberapa kata lagi'
                ]
            ],
            'bedroom' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'luas_area' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'luas_gedung' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'parkir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'kamar_mandi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'thumbnail' => [
                'rules' => 'uploaded[thumbnail]|is_image[thumbnail]|max_size[thumbnail,5024]',
                'errors' => [
                    'uploaded' => '{field} tidak boleh kosong',
                    'is_image' => 'Pastikan file yang diupload merupakan gambar',
                    'max_size' => 'File yang diupload tidak boleh lebih dari 5 Mb'
                ]
            ],
            'image_1' => [
                'rules' => 'uploaded[image_1]|is_image[image_1]|max_size[image_1,5024]',
                'errors' => [
                    'uploaded' => '{field} tidak boleh kosong',
                    'is_image' => 'Pastikan file yang diupload merupakan gambar',
                    'max_size' => 'File yang diupload tidak boleh lebih dari 5 Mb'
                ]
            ],
            'image_2' => [
                'rules' => 'uploaded[image_2]|is_image[image_2]|max_size[image_2,5024]',
                'errors' => [
                    'uploaded' => '{field} tidak boleh kosong',
                    'is_image' => 'Pastikan file yang diupload merupakan gambar',
                    'max_size' => 'File yang diupload tidak boleh lebih dari 5 Mb'
                ]
            ],
            'image_3' => [
                'rules' => 'uploaded[image_3]|is_image[image_3]|max_size[image_3,5024]',
                'errors' => [
                    'uploaded' => '{field} tidak boleh kosong',
                    'is_image' => 'Pastikan file yang diupload merupakan gambar',
                    'max_size' => 'File yang diupload tidak boleh lebih dari 5 Mb'
                ]
            ],
            'video' => [
                'rules' => 'uploaded[video]|max_size[video,800024]',
                'errors' => [
                    'uploaded' => '{field} tidak boleh kosong',
                    'max_size' => 'File yang diupload tidak boleh lebih dari 80 Mb'
                ]
            ],

        ])) {
            return redirect()->to('/admin/project/add')->withInput();
        }

        // File Thumbnail
        $thumbnail = $this->request->getFile('thumbnail');
        $berkas_thumbnail = 'thumbnail' . '-' . $thumbnail->getRandomName();
        $thumbnail->move(FCPATH . '/uploads/thumbnail', $berkas_thumbnail);

        // File image_1
        $image_1 = $this->request->getFile('image_1');
        $berkas_image_1 = 'image_1' . '-' . $image_1->getRandomName();
        $image_1->move(FCPATH . '/uploads/gallery', $berkas_image_1);

        // File image_2
        $image_2 = $this->request->getFile('image_2');
        $berkas_image_2 = 'image_2' . '-' . $image_2->getRandomName();
        $image_2->move(FCPATH . '/uploads/gallery', $berkas_image_2);

        // File image_3
        $image_3 = $this->request->getFile('image_3');
        $berkas_image_3 = 'gallery' . '-' . $image_3->getRandomName();
        $image_3->move(FCPATH . '/uploads/gallery', $berkas_image_3);

        // File video
        $video = $this->request->getFile('video');
        $berkas_video = 'video' . '-' . $video->getRandomName();
        $video->move(FCPATH . '/uploads/video', $berkas_video);

        $data = [
            'nama' => $this->request->getPost('nama'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'bedroom' => $this->request->getPost('bedroom'),
            'luas_area' => $this->request->getPost('luas_area'),
            'luas_gedung' => $this->request->getPost('luas_gedung'),
            'parkir' => $this->request->getPost('parkir'),
            'kamar_mandi' => $this->request->getPost('kamar_mandi'),
            'img_thumbnail' => $berkas_thumbnail,
            'img_gallery_1' => $berkas_image_1,
            'img_gallery_2' => $berkas_image_2,
            'img_gallery_3' => $berkas_image_3,
            'video' => $berkas_video,
        ];

        $insert = $this->project->insert($data);
        if ($insert) {
            $session = session();
            $session->setFlashdata('insert', 'success');
            return redirect()->to('/admin/project');
        } else {
            echo "error";
        }
    }

    public function deleteProject($id)
    {
        $delete = $this->project->delete(['id' => $id]);
        if ($delete) {
            $session = session();
            $session->setFlashdata('delete', 'success');
            return redirect()->to('/admin/project');
        } else {
            echo "error";
        }
    }

    public function editProject($id)
    {
        $data = [
            'validation' => \Config\Services::validation(),
            'project' => $this->project->find($id)
        ];

        return view('Admin/edit-project', $data);
    }

    public function updateProject($id)
    {
        session();

        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required|min_length[50]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'min_length' => '{field} terlalu singkat, silahkan tambahkan beberapa kata lagi'
                ]
            ],
            'bedroom' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'luas_area' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'luas_gedung' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'parkir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'kamar_mandi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'thumbnail' => [
                'rules' => 'is_image[thumbnail]|max_size[thumbnail,5024]',
                'errors' => [
                    'is_image' => 'Pastikan file yang diupload merupakan gambar',
                    'max_size' => 'File yang diupload tidak boleh lebih dari 5 Mb'
                ]
            ],
            'image_1' => [
                'rules' => 'is_image[image_1]|max_size[image_1,5024]',
                'errors' => [
                    'is_image' => 'Pastikan file yang diupload merupakan gambar',
                    'max_size' => 'File yang diupload tidak boleh lebih dari 5 Mb'
                ]
            ],
            'image_2' => [
                'rules' => 'is_image[image_2]|max_size[image_2,5024]',
                'errors' => [
                    'is_image' => 'Pastikan file yang diupload merupakan gambar',
                    'max_size' => 'File yang diupload tidak boleh lebih dari 5 Mb'
                ]
            ],
            'image_3' => [
                'rules' => 'is_image[image_3]|max_size[image_3,5024]',
                'errors' => [
                    'is_image' => 'Pastikan file yang diupload merupakan gambar',
                    'max_size' => 'File yang diupload tidak boleh lebih dari 5 Mb'
                ]
            ],
            'video' => [
                'rules' => 'max_size[video,800024]',
                'errors' => [
                    'max_size' => 'File yang diupload tidak boleh lebih dari 80 Mb'
                ]
            ],

        ])) {
            return redirect()->to('/admin/project/add')->withInput();
        }


        // File Thumbnail
        if ($this->request->getFile('thumbnail')->getName() != "") {
            $thumbnail = $this->request->getFile('thumbnail');
            $berkas_thumbnail = 'thumbnail' . '-' . $thumbnail->getRandomName();
            $thumbnail->move(FCPATH . '/uploads/thumbnail', $berkas_thumbnail);
        } else {
            $berkas_thumbnail = $this->request->getPost('thumbnail_temp');
        }

        // File image_1
        if ($this->request->getFile('image_1')->getName() != "") {
            $image_1 = $this->request->getFile('image_1');
            $berkas_image_1 = 'image_1' . '-' . $image_1->getRandomName();
            $image_1->move(FCPATH . '/uploads/gallery', $berkas_image_1);
        } else {
            $berkas_image_1 = $this->request->getPost('image_1_temp');
        }

        // File image_2
        if ($this->request->getFile('image_2')->getName() != "") {
            $image_2 = $this->request->getFile('image_2');
            $berkas_image_2 = 'image_2' . '-' . $image_2->getRandomName();
            $image_2->move(FCPATH . '/uploads/gallery', $berkas_image_2);
        } else {
            $berkas_image_2 = $this->request->getPost('image_2_temp');
        }

        // File image_3
        if ($this->request->getFile('image_3')->getName() != "") {
            $image_3 = $this->request->getFile('image_3');
            $berkas_image_3 = 'gallery' . '-' . $image_3->getRandomName();
            $image_3->move(FCPATH . '/uploads/gallery', $berkas_image_3);
        } else {
            $berkas_image_3 = $this->request->getPost('image_3_temp');
        }

        // File video
        if ($this->request->getFile('video')->getName() != "") {
            $video = $this->request->getFile('video');
            $berkas_video = 'video' . '-' . $video->getRandomName();
            $video->move(FCPATH . '/uploads/video', $berkas_video);
        } else {
            $berkas_video = $this->request->getPost('video_temp');
        }

        $data = [
            'nama' => $this->request->getPost('nama'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'bedroom' => $this->request->getPost('bedroom'),
            'luas_area' => $this->request->getPost('luas_area'),
            'luas_gedung' => $this->request->getPost('luas_gedung'),
            'parkir' => $this->request->getPost('parkir'),
            'kamar_mandi' => $this->request->getPost('kamar_mandi'),
            'img_thumbnail' => $berkas_thumbnail,
            'img_gallery_1' => $berkas_image_1,
            'img_gallery_2' => $berkas_image_2,
            'img_gallery_3' => $berkas_image_3,
            'video' => $berkas_video,
        ];

        $this->project->set($data);
        $this->project->where('id', $id);
        $update = $this->project->update();
        if ($update) {
            $session = session();
            $session->setFlashdata('update', 'success');
            return redirect()->to('/admin/project');
        } else {
            echo "error";
        }
    }
}
