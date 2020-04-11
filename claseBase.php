<?php
require_once __DIR__.'/vendor/autoload.php';
use NNV\RestCountries;

class Rest
{
   protected $rest;
   
   public function __construct()
   {
       $this->rest = new RestCountries;    
   }

}

class Pais extends Rest
{
     public $name;
     public $capital;
     public $region;
     public $moneda;

 public function __construct($nombre,$isFullName=false)
 {
     parent::__construct();
     $pais=$this->rest->byName($nombre,$isFullName);

     $this->name=$pais[0]->name;
     $this->capital=$pais[0]->capital;
     $this->region=$pais[0]->region;
     $this->moneda=$pais[0]->moneda;
     
 }
          



}

?>
