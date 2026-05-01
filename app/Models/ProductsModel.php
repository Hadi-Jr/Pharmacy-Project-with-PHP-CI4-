<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

class ProductsModel
{
    protected $db;

    public function __construct(ConnectionInterface &$db)
    {
        $this->db = &$db;
    }

    public function get_category_products($category_id)
    {
        $products = $this->db
            ->table('products')
            ->where('category_id', $category_id)
            ->get()
            ->getResult();

        if ($products) {
            return $products;
        } else {
            return false;
        }
    }
}