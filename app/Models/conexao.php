<?php
namespace MVCETIM\Models;

use Exception;
use PDO;

class Conexao
{
    private $conn;
    protected function connect()
    {
        try
        {
            $this->conn = new \PDO('mysql:host=' 
            . DATABASE['host'] . ';dbname=' 
            . DATABASE['dbname'] . '; charset=utf8', 
            DATABASE['user'], 
            DATABASE['password'], 
            DATABASE['options']);

            return $this->conn;
        }
        catch(\Exception $erro)
        {
            die('ERROR... <br> Erro ao se conectar<br>' . $erro->getMessage());
        }
    }

}