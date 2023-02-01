<?php

namespace App\Service;

use App\Repository\ProductRepository;

class ProductService
{
	private ProductRepository $ProductRepository;

    public function __construct()
    {
        $this->ProductRepository = new ProductRepository();
    }

	/**
     * Solicita todos os dados
     * @return Array
     * @return String 
     */
	public function getAll()
	{
		return $this->ProductRepository->getAll();
	}
}