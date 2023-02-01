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

	/**
     * Solicita a verificação do Token
     * @param Baren
     * @return Boolean
     * @return String
     */
	public function findToken($token)
	{
		return $this->TokenRepository->findById($token);
	}
}