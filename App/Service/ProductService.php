<?php

namespace App\Service;

use App\Provider\FabricaDeCodigoProvider;
use App\Repository\ProductRepository;

class ProductService
{
	private $repository;

    public function __construct()
    {
        $this->repository = new ProductRepository(new FabricaDeCodigoProvider());
    }

	/**
     * Solicita todos os produtos
     * @return Array
     * @return String 
     */
	public function getAll()
	{
		return $this->repository->getAll();
	}
}