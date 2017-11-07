<?php

class BoseCommand {

   static function sendGet($ip, $method) {
      $ch = curl_init("http://$ip:8090/$method");
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/xml'));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      $response = curl_exec($ch);
      curl_close($ch);
      return $response;
   }

   static function sendPost($ip, $method, $xml) {
      $ch = curl_init("http://$ip:8090/$method");
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/xml'));
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
      $response = curl_exec($ch);
      curl_close($ch);
      return $response;
   }
}
?>
