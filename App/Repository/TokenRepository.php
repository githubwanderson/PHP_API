<?php

namespace App\Repository;

use Db\Db;
use App\Utility\ConstantsUtility;
use InvalidArgumentException;

class TokenRepository
{
	private const TABLE = 'tokens';
    private const COLUMN_TOKEN = 'TOKEN';
    private const COLUMN_CONDITION = 'ATIVO';
    private const VALUE_CONDITION = '1';
    private Db $Db;

    public function __construct($request = [])
    {
        $this->Db = new DB(self::TABLE);
    }

    /**
     * Se comunica com DB e verifica se ha Token
     * @param Baren
     * @return Boolean
     * @return String
     */
    public function findById($token)
    {
    	$where = "TOKEN = \"$token\" AND ATIVO = 1";

	    if($this->Db->findAll($where)->fetch(\PDO::FETCH_ASSOC)) {
	    	return true;
	    };
	    return ConstantsUtility::ERROR_TOKEN_DB;
    }
}