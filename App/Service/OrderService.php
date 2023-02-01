<?php

namespace App\Service;

use App\Repository\OrderRepository;

class OrderService
{
	private OrderRepository $OrderRepository;

    public function __construct()
    {
        $this->OrderRepository = new OrderRepository();
    }

	/**
     * Solicita busca por Id
	 * @param Integer
     * @return Array
     * @return false 
     */
    public function getById($id)
	{
		return $this->OrderRepository->getById($id);
	}

	/**
     * Encaminha post request
	 * @param Array
     * @return Array
     * @return false 
     */
	public function setOrder($post) 
	{
		return $this->OrderRepository->setOrder($post);
	}
}