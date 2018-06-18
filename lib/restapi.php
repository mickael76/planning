<?php
    require_once 'curl.php';
    require_once 'curl_response.php';

	class Rest_Api {
	
		private $urlApi = "https://api.resamania.fr/rest/resamania/v1/";
		private $curl;
			
		public function __construct(){
            $this->curl = new Curl;
            $this->curl->headers['mail'] = 'tribu-outfit-api@resamania.fr';
            $this->curl->headers['password'] = 'G2cDn2rK6eezczTC';
            $this->curl->options['CURLOPT_SSL_VERIFYHOST'] = 0;
            $this->curl->options['CURLOPT_SSL_VERIFYPEER'] = 0;
		}
		
		/**
		 * Public method for access api.
		 * This method dynmically call the method based on the query string
		 *
		 */
		public function processApi($func){
			$func = strtolower(trim(str_replace("/","",$_REQUEST['rquest'])));
			if((int)method_exists($this,$func) > 0)
				$this->$func();
			else
				$this->response('',204);				// If the method not exist with in this class, response would be "Page not found".
		}

		private function getPlanningCurrentWeek() {
            $this->urlApi .= "/customer";
            $params = ["offset"=>0,"size"=>100,"supplierId"=>1468];
            $response = $this->curl->get($this->urlApi , $params);
            if($response) {
                echo $response;
            }

        }

	}
