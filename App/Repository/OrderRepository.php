<?php

namespace App\Repository;

use App\Provider\ProviderInterface;

class OrderRepository
{
	private ProviderInterface $Provider; 

	public function __construct(ProviderInterface $Provider)
	{
		$this->Provider = new $Provider;
	}

	/**
     * Solicita order por Id
	 * @param Integer
     * @return Array
     * @return false 
     */
	public function getById($id)
	{
		return $this->Provider->getById($id);
	}

	/**
     * Encaminha nova order para o fornecedor
	 * @param Array
     * @return Array
     * @return false 
     */
	public function setOrder($post)
	{
		return $this->Provider->create($post);
	}
}