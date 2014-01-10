<?php
class SearsAPIResponse {
  var $data;
  var $json_data;
  function SearsAPIResponse($response_string) {
    $this->data = $response_string;
    $this->json_data = json_decode($this->data);
    
  }

  function get_string() {
    return $this->data;
  }


  function get_json() {
    return $this->json_data;
  }




}


?>