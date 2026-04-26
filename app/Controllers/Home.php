<?php

namespace App\Controllers;

use Config\Database;

class Home extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function index()
    {
        $this->data += [
            'seo_data' => []
        ];

        echo view('templates/meta', $this->data);
        echo view('templates/header', $this->data);
        echo view('home/homepage', $this->data);
        echo view('templates/footer', $this->data);
    }
}