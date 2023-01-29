<?php

namespace App\Service;

use App\Repository\TokenRepository;

class TokenService
{
	private object $TokenRepository;

    public function __construct()
    {
        $this->TokenRepository = new TokenRepository();
    }

	public function findToken($token)
	{
		return $this->TokenRepository->findToken($token);
	}
}