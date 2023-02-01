<?php

namespace App\Resource;

use App\Service\ProductService;
use App\Utility\ConstantsUtility;

class ProductResource
{
	/**
     * Verifica se existe Id
	 * @param Integer
     * @return Array
     * @return String 
     */
	public function getProduct($id = null)
	{
		if($id === null) {
			return (new ProductService())->getAll();
		}
		return ConstantsUtility::ERROR_TYPE_ROUTE;
	}
}
