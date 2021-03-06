<?php

class BoseCommand {

   public function __construct(){
      //for consistency
   }

   public function executeCURL($ch)
   {
      $response = curl_exec($ch);
      curl_close($ch);
      return $response;
   }

   public function sendGet($ip, $method)
   {
      $ch = curl_init("http://$ip:8090/$method");
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/xml'));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      $response = executeCURL($ch);
      return $response;
   }

   public function sendPost($ip, $path, $xml)
   {
      $ch = curl_init("http://$ip:8090/$path");
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/xml'));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
      $response = executeCURL($ch);
      return $response;
   }

}
?>
