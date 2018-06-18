<?php

try{
	require_once 'curl.php';
	$curl = new Curl;
	$urlApi = "https://api.resamania.fr/rest/resamania/v1//customer";
	$params = ["offset"=>0,"size"=>100,"supplierId"=>1468];
	$curl->headers['mail'] = 'tribu-outfit-api@resamania.fr';
	$curl->headers['password'] = 'G2cDn2rK6eezczTC';
	$curl->options['CURLOPT_SSL_VERIFYHOST'] = 0;
	$curl->options['CURLOPT_SSL_VERIFYPEER'] = 0;	

	$response = $curl->get($urlApi , $params);
	echo $response;
	
} catch(Exception $error){
	echo $error;
}