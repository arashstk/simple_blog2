<?php
namespace App\Model;

class DB
{
    protected $pdo;

    public function __construct()
    {
        $this->pdo = new \PDO("mysql:host:127.0.0.1;dbname=","root","")
    }
}
