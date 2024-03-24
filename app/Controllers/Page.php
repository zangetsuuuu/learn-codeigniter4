<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function home()
    {
        $data = [
            'title' => 'Home',
        ];

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me',
        ];

        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
        ];

        return view('pages/contact', $data);
    }
}
