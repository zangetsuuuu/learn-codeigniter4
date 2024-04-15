<?php

namespace App\Models;

use CodeIgniter\Model;

class ComicsModel extends Model
{
    protected $table = 'comics';
    protected $returnType = 'array';
    protected $useTimeStamps = true;
    protected $allowedFields = ['judul', 'slug', 'penulis', 'penerbit', 'sampul'];

    public function getComics($slug = false)
    {
        if ($slug == false)
        {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}