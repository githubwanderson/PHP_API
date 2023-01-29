<?php

namespace App\Resource;

use Db\Db;

class TokenValidationResource
{   
    private const TABLE = 'tokens';
    private Db $Db;

    public function __construct($request = [])
    {
        $this->Db = new DB(self::TABLE);
    }

    public function validarToken($token)
    {
        $r = $this->Db->findAll()->fetch(\PDO::FETCH_ASSOC);
        var_dump($r);
        exit;
    }




}