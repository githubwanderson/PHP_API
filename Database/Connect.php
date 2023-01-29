<?php

namespace Db;

use PDO;

class Connect
{
    private $dsn = 'mysql:host=localhost;dbname=db_api_mplace';
    private $user = 'root';
    private $password = '';
    protected $connection;

    public function __construct()
    {
        $this->setConnection();
    }

    /**
     * Responsável por conectar com o banco de dados
     * @return void
     */
    private function setConnection()
    {
        try {
            $this->connection = new PDO($this->dsn,$this->user,$this->password);   
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        } catch (\PDOException $e) {
            die('Error connect database! ' . $e->getMessage());
        }
    }

    /**
     * Responsável por executar uma query
     * @param string $query
     * @param array<string> $params
     * @return \PDOStatement|bool
     */
    public function execute($query,$params = [])
    {
        try {
           $statement = $this->connection->prepare(($query));
           $statement->execute($params);
           return $statement;
        } catch (\PDOException $e) {
            die('Error execute query! ' . $e->getMessage());
        }        
    }
}
