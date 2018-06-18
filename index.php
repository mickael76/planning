<?php
ini_set('display_errors', 1);
ini_set('error_reporting', 'E_ALL');
try{
	require_once 'lib/restapi.php';
    $api = new Rest_Api;
    $api->processApi();
	
} catch(Exception $error){
	echo 'une erreur'.$error;
}