<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table      = 'project';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama', 'deskripsi', 'bedroom', 'luas_area', 'luas_gedung', 'parkir', 'kamar_mandi', 'img_thumbnail', 'img_gallery_1', 'img_gallery_2', 'img_gallery_3', 'video', 'created_at', 'updated_at'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
