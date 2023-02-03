<?php

namespace App\Repository;

use App\Provider\ProviderInterface;

class ProductRepository
{
	private $Provider; 

	public function __construct(ProviderInterface $Provider)
	{
		$this->Provider = $Provider;
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