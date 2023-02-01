<?php

namespace App\Repository;

use App\Provider\FabricaDeCodigoProvider;
use App\Provider\ProviderInterface;
use App\Utility\ConstantsUtility;

class OrderRepository
{
	private ProviderInterface $Provider; 

	public function __construct()
	{
		$this->Provider = new FabricaDeCodigoProvider;
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