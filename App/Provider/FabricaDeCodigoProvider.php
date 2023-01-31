<?php

namespace App\Provider;

use App\Provider\FabricaDeCodigoProvider;

class FabricaDeCodigoProvider implements ProviderInterface
{
	private const AUTHORIZATION_BEARER = 'TESTE-12345';
	private const URL_PROVIDER = 'https://jsonplaceholder.typicode.com/';
	private const GET_PRODUCT = 'users/';
	private const GET_ORDER = 'albums/';
	private const GET = 'GET';

	private $curl;
	private $headers = [
		'Authorization : Bearer ' . self::AUTHORIZATION_BEARER,
		'Content-Type: application/json'
	];

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
		curl_setopt_array($this->curl, [
			CURLOPT_URL 			=> self::URL_PROVIDER . self::GET_ORDER . $id,
			CURLOPT_CUSTOMREQUEST 	=> self::GET,
			CURLOPT_RETURNTRANSFER 	=> true,
			CURLOPT_HTTPHEADER		=> $this->headers
		]);
		$result = curl_exec($this->curl);
		curl_close($this->curl);
		return $result;
	}

	/**
     * Request: order/create
     * 
     */
	public function create($post)
	{
		//VALIDAR DADOS E FORMATO DO POST PARA API
		
		
		curl_setopt_array($this->curl, [
			CURLOPT_URL 			=> self::URL_PROVIDER . self::GET_ORDER,
			CURLOPT_CUSTOMREQUEST 	=> $post,
			CURLOPT_RETURNTRANSFER 	=> true,
			CURLOPT_HTTPHEADER		=> $this->headers,
			CURLOPT_POSTFIELDS		=> $post
		]);
		$result = curl_exec($this->curl);
		curl_close($this->curl);
		return $result;
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

}