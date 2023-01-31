<?php

namespace App\Provider;

use App\Provider\FabricaDeCodigoProvider;

class FabricaDeCodigoProvider implements ProviderInterface
{
	private $curl;
	private const URL_PROVIDER = 'https://jsonplaceholder.typicode.com/';
	private const GET_PRODUCT = 'albums/';
	private const GET_ORDER = 'users/';

	public function __construct()
	{
		$this->curl = curl_init();
	}

	/**
     * Request: order/getById
     * 
     */
	public function getById($id)
	{
		curl_setopt($this->curl, CURLOPT_URL, self::URL_PROVIDER . self::GET_ORDER . $id);
		curl_setopt($this->curl, CURLOPT_CUSTOMREQUEST, 'GET');
		curl_exec($this->curl);
		curl_close($this->curl);
		return $this->curl;
	}

	/**
     * Request: products/get
     * 
     */
	public function get()
	{
		curl_setopt($this->curl, CURLOPT_URL, self::URL_PROVIDER . self::GET_PRODUCT);
		curl_setopt($this->curl, CURLOPT_CUSTOMREQUEST, 'GET');
		curl_exec($this->curl);
		curl_close($this->curl);
		return $this->curl;
	}

	/**
     * Request: order/create
     * 
     */
	public function create()
	{

	}
}