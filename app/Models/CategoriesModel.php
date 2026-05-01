<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

class CategoriesModel
{
    protected $db;

    public function __construct(ConnectionInterface &$db)
    {
        $this->db = &$db;
    }

    public function get_all_categories()
    {
        return $this->db
            ->table('categories')
            ->get()
            ->getResult();
    }

    public function get_category_by_slug($category_slug)
    {
        return $this->db
            ->table('categories')
            ->where('slug', $category_slug)
            ->get()
            ->getRow();
    }
}