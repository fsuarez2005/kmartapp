<?php

require_once('SearsAPIResponse.php');


class SearsAPIConnection {
  var $server = "api.developer.sears.com";
  var $version = "v2.1";
  var $apikey = 'dTOQ78NQu2FV3wNNfkJNxBkAPNrvLeUA';
  //var $apikey;

  function SearsAPIConnection() {
    // load api key
    


  }


  function keyword_search($keyword) {
    // url: products/{searchType}/{storeName}/{content}/keyword/{keyword}?


    $r = new SearsAPIRequest();

    $r->set_keyword( $keyword );

    $r->set_searchType('search');
    $r->set_apikey($this->apikey);
    $r->set_storeName('Kmart');
    $r->set_Content('json');

    return $this->submit_request($r);
  }

  function submit_request($request) {
    $url = $request->generate_url($this->server,$this->version);
    
    $c = curl_init($url);
    curl_setopt($c,CURLOPT_RETURNTRANSFER,true);
    $response_string = curl_exec($c);
    curl_close($c);


    $r = new SearsAPIResponse($response_string);
    return $r;
  }


  function product_details($request) {
    // url: products/details/{storeName}/{Content}/{partNumber}?
  }


}


?>