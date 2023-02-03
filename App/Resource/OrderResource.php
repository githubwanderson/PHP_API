<?php

namespace App\Resource;

use App\Service\OrderService;
use App\Utility\ConstantsUtility;

class OrderResource
{
	private $service;

	public function __construct()
	{
		$this->service = new OrderService();
	}

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
		return $this->service->getById($id);
	}

	/**
     * Encaminha post request
	 * @param Array
     * @return Array
     * @return false 
     */
	public function setOrder($post)
	{
		return $this->service->setOrder($post);
	}
}
