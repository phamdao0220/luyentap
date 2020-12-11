<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2020-12-11
 * Time: 08:04
 */

namespace App\model;

use PDO;


class DBConnect
{
    protected $dsn;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=thithuchanh";
        $this->username = 'root';
        $this->password = '123456@Abc';

    }

    public function connect()
    {
        try {
            return new PDO($this->dsn, $this->username, $this->password);
        } catch (\PDOException $e) {
            echo $e->getMessage();
            exit();
        }
    }
}
