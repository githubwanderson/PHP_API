<?php

namespace App\Repository;

use App\Provider\FabricaDeCodigoProvider;
use App\Provider\ProviderInterface;

class ProductRepository
{
	private ProviderInterface $Provider; 

	public function __construct()
	{
		$this->Provider = new FabricaDeCodigoProvider;
	}
	
	/**
     * Solicita todos os produtos de Provider
     * @return Array
     * @return String 
     */
	public function getAll()
	{
		return $this->Provider->get();
	}
}