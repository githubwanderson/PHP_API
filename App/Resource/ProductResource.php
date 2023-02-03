<?php

namespace App\Resource;

use App\Service\ProductService;
use App\Utility\ConstantsUtility;

class ProductResource
{
	private $service;

	public function __construct()
	{
		$this->service = new ProductService();
	}
	/**
     * Verifica se existe Id
	 * @param Integer
     * @return Array
     * @return String 
     */
	public function getProduct($id = null)
	{
		if($id === null) {
			return $this->service->getAll();
		}
		return ConstantsUtility::ERROR_TYPE_ROUTE;
	}
}
