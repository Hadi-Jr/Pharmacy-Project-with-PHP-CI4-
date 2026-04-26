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
}