<?php

namespace App\Repository;

use Db\Db;
use App\Utility\ConstantsUtility;

class TokenRepository
{
	private const TABLE = 'tokens';
    private const COLUMN_TOKEN = 'TOKEN';
    private $Db;

    public function __construct()
    {
        $this->Db = new Db(self::TABLE);
    }

    /**
     * Se comunica com DB e verifica se ha Token
     * @param String token Baren
     * @return true|String
     */
    public function findById($token)
    {
    	$where = self::COLUMN_TOKEN . " = \"$token\" AND ATIVO = 1";

	    if($this->Db->findAll($where)->fetch(\PDO::FETCH_ASSOC)) {
	    	return true;
	    };
	    return ConstantsUtility::ERROR_TOKEN_DB;
    }
}