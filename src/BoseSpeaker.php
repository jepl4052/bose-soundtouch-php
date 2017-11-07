<?php
class BoseSpeaker {

   private $ip;

   public function __construct($ip)
   {
      setIP($ip);
   }

   public function getIP()
   {
      return $this->$ip;
   }

   public function setIP($ip)
   {
         $this->$ip = $ip;
   }

}

?>
