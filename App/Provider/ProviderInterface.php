<?php

namespace App\Provider;

interface ProviderInterface
{
	/**
     * Request: order/getById
     * 
     */
	public function getById($id);

	/**
     * Request: products/get
     * 
     */
	public function get();

	/**
     * Request: order/create
     * 
     */
	public function create();
}