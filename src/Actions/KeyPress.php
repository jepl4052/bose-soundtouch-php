<?php

class KeyPress {

   /* It is according to the Bose Soundtouch API documentation good practice
      to send 2 discrete requests to a Bose speaker when using /Key.
      Create 2 objects of this class and send both:
         - one with $state = press
         - one with $state = release
   */

   private $state;
   private $value;
   private $method = 'POST';
   private $path = 'key';

   public function __construct($state, $value) {
         $this->state = $state;
         $this->value = $value;
   }

   public function getPayload() {
      return = '<key state="'. getState() .'" sender="Gabbo">'. getValue() .'</key>';
   }

   public function getState() {
      return $this->state;
   }

   public function getValue() {
      return $this->value;
   }

   public function getMethod() {
      return $this->method;
   }

   public function getPath() {
      return $this->path;
   }

   public function setState($state) {
      $this->state = $state;
      return $this;
   }

   public function setValue($value) {
      $this->value = $value;
      return $this;
   }

   private function setMethod($method) {
      /* This function is not allowed to actually change the attribute $method,
         it will render objects of this class unusable when trying to send a command
         to a bose speaker. Method exists only for consistency.
      */
      return;
   }

   private function setPath($path) {
      /* This function is not allowed to actually change the attribute $path,
         it will render objects of this class unusable when trying to send a command
         to a bose speaker. Method exists only for consistency.
      */
      return;
   }

}

?>
