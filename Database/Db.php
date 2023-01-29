<?php

namespace Db;

use Db\Connect;

class Db extends Connect
{
    private $table;

    public function __construct($table)
    {
        parent::__construct();
        $this->table = $table;
    }

    

    /**
     * Responsável por buscar muitos registros
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