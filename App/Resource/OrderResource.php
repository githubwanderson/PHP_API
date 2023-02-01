<?php

namespace App\Resource;

use App\Service\OrderService;
use App\Utility\ConstantsUtility;

class OrderResource
{
	/**
     * Verifica se existe Id
	 * @param Integer
     * @return Array
     * @return String 
     */
	public function getOrder($id)
	{
		if($id === null) {
			return ConstantsUtility::ERROR_TYPE_ROUTE;
		}
		return (new OrderService())->getById($id);
	}

	/**
     * Encaminha post request
	 * @param Array
     * @return Array
     * @return false 
     */
	public function setOrder($post)
	{
		return (new OrderService())->setOrder($post);
	}
}
