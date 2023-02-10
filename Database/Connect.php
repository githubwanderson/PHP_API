<?php

namespace Db;

use PDO;

/**
 * Classe abstrata responsavel por efetuar a conexão com o BD
 * @package class
 * @author Wanderson Alves <emailwandersonalves@gmail.com>
 */
abstract class Connect
{
    /**
     * Propriedade com as tags de conexao | host | dbname
     * @var string
     */
    private string $dsn = 'mysql:host=localhost;dbname=db_api_mplace';

    /**
     * Propriedade com o nome do usuario do BD
     * @var string
     */
    private string $user = 'root';

    /**
     * Propriedade com a senha do usuario do BD
     * @var string
     */
    private string $password = '';

    /**
     * Propriedade com obj PDO
     * @var PDO
     */
    protected PDO $connection;

    public function __construct()
    {
        $this->setConnection();
    }

    /**
     * Método que inicia a conexão com o BD
     * @return void
     */
    private function setConnection()
    {
        try {
            $this->connection = new PDO($this->dsn,$this->user,$this->password);   
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        } catch (\PDOException $e) {
            die('Erro ao conectar no BD. ' . $e->getMessage());
        }
    }

    /**
     * Método que executa uma query no BD
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
            die('Erro ao executar a query no BD. ' . $e->getMessage());
        }        
    }
}
