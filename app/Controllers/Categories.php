<?php

namespace App\Controllers;

use App\Models\CategoriesModel;
use Config\Database;

class Categories extends BaseController
{
    protected $db;
    protected $categoriesModel;

    public function __construct()
    {
        $this->db = Database::connect();
        $this->categoriesModel = new CategoriesModel($this->db);
    }

    public function index()
    {
        $this->data += [
            'seo_data' => []
        ];

        $categories = $this->categoriesModel
            ->get_all_categories();

        foreach ($categories as $key => $category) {

        }
    }
}