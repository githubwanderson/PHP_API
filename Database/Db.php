<?php

namespace Db;

use Db\Connect;

/**
 * Classe responsável por fazer consultas no BD 
 * @package class
 * @author Wanderson Alves <emailwandersonalves@gmail.com>
 */
class Db extends Connect
{
    /**
     * Propriedade com a tabela do BD
     * @var string
     */
    private string $table;

    /**
     * Construtor
     * @param string $table
     */
    public function __construct(string $table)
    {
        parent::__construct();
        $this->table = $table;
    }    

    /**
     * Método de busca multiplas no BD
     * @param string $where
     * @param string $join
     * @param string $order
     * @param string $limit
     * @param string $fields
     * @return \PDOStatement|bool
     */
    public function findAll($where=null, $join=null, $order=null, $limit=null, $fields='*')
    {
        $join = strlen($join) ? ' JOIN '.$join : '';
        $where = strlen($where) ? ' WHERE '.$where : '';
        $order = strlen($order) ? ' ORDER BY '.$order : '';
        $limit = strlen($limit) ? ' LIMIT '.$limit : '';

        $query = "SELECT $fields FROM $this->table $join $where $order $limit";

        return $this->execute($query);
    }
}