<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

class ClientsModel
{
    protected $db;

    public function __construct(ConnectionInterface &$db)
    {
        $this->db = &$db;
    }

    public function getUser($email, $password)
    {
        $user = $this->db
            ->table('users')
            ->where('email', $email)
            ->where('password', md5($password))
            ->get()
            ->getRow();

        if ($user) {
            return $user;
        } else {
            return false;
        }
    }

    public function register($email, $first_name, $last_name, $password)
    {
        $user = $this->db
            ->table('users')
            ->where('email', $email)
            ->get()
            ->getRow();

        if ($user) {
            return false;
        } else {
            $data = [
                'email' => $email,
                'password' => md5($password),
                'last_name' => $last_name,
                'first_name' => $first_name,
                'role' => 'Client'
            ];

            $this->db->table('users')->insert($data);

            return true;
        }
    }

}