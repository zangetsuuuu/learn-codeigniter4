<?php

namespace App\Controllers;

use App\Models\ComicsModel;

class Comics extends BaseController
{
    protected $comicsModel;

    public function __construct()
    {
        $this->comicsModel = new ComicsModel();
    }

    public function index(): string
    {
        $data = [
            'title' => 'Comics',
            'comics' => $this->comicsModel->getComics()
        ];

        return view('comics/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Komik',
            'comics' => $this->comicsModel->getComics($slug)
        ];

        if (empty($data['comics'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul komik ' . $slug . ' tidak ditemukan');
        }

        return view('comics/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Komik',
            'validation' => session()->getFlashdata('validation')
        ];

        return view('comics/create', $data);
    }


    public function save()
    {
        $config = [
            'judul' => [
                'rules' => 'required|is_unique[comics.judul]',
                'errors' => [
                    'required' => 'Judul komik tidak boleh kosong!',
                    'is_unique' => 'Judul komik sudah tersedia!'
                ]
            ],
        ];

        if (!$this->validate($config)) {
            return redirect()->to('/comics/create')->withInput()->with('validation', $this->validator);
        }

        $data = [
            'judul' => $this->request->getVar('judul'),
            'slug' => url_title($this->request->getVar('judul'), '-', true),
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $this->request->getVar('sampul')
        ];

        $this->comicsModel->save($data);

        session()->setFlashdata('Pesan', 'Data berhasil ditambahkan!');

        return redirect()->to('comics');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Form Tambah Komik',
            'validation' => session()->getFlashdata('validation'),
            'comics' => $this->comicsModel->getComics($slug)
        ];

        return view('comics/edit', $data);
    }

    public function update($id)
    {
        $oldComic = $this->comicsModel->getComics($this->request->getVar('slug'));

        if ($oldComic['judul'] == $this->request->getVar('judul')) {
            $title_rule = 'required';
        } else {
            $title_rule = 'required|is_unique[comics.judul]';
        }


        $config = [
            'judul' => [
                'rules' => $title_rule,
                'errors' => [
                    'required' => 'Judul komik tidak boleh kosong!',
                    'is_unique' => 'Judul komik sudah tersedia!'
                ]
            ],
        ];

        if (!$this->validate($config)) {
            return redirect()->to('/comics/edit/' . $this->request->getVar('slug'))->withInput()->with('validation', $this->validator);
        }

        $data = [
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => url_title($this->request->getVar('judul'), '-', true),
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $this->request->getVar('sampul')
        ];

        $this->comicsModel->save($data);

        session()->setFlashdata('Pesan', 'Data berhasil diubah!');

        return redirect()->to('/comics');
    }

    public function delete($id)
    {
        $this->comicsModel->delete($id);

        session()->setFlashdata('Pesan', 'Data berhasil dihapus!');

        return redirect()->to('/comics');
    }
}
