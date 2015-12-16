<?php
class MagicMethodSet
{
   private $nama="Rifki";
 
   public function setNama($nama)
   {
      $this->nama = $nama;
   }
 
   public function getNama()
   {
      return $this->nama;
   }
 
   public function __set($vn, $vt)
   {
      echo "data {$vn} <br />";
      echo "data {$vt}<br />";
      echo "data tidak dapat diatur <br />";
   }
}
 
$objek = new MagicMethodSet();
$objek->nama="John";
 
?>