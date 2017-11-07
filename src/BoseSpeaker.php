<?php
public class BoseSpeaker {

   private $ip;

   public function __construct($ip)
   {
      this->$ip = $ip;
   }

   public function getSpeakerIP()
   {
      return $this->$ip;
   }

   public function setSpeakerIP($ip)
   {
         $this->$ip = $ip;
   }

}

?>
