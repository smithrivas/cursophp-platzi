<?php
namespace App\Models;

class BaseElement implements Printable{
    protected $title;
    public $description;
    public $visible = true;
    public $months;
  
    // Metodo reservado para asignar valores inciales a las propiedades
    public function __construct($title, $description){
      $this->setTitle($title); // Se llama el metodo para realizar la validación de que no venga vacio el title
      $this->description = $description;
    }
  
    // Metodo para asignar valor al titulo
    public function setTitle($t){
      if ($t == '') {
        $this->title = 'N/A';
      } else {
        $this->title = $t;
      }   
    }
  
    // Metodo para retornar valor del titulo
    public function getTitle(){
      return $this->title;
    }
  
    // Muestra cuantos años y meses estuvo en ese trabajo
    function getDurationAsString(){
      $years = floor($this->months/12); // Valor en años
      $extraMonths = $this->months % 12; // Valor en meses
      if (($years>0) && ($extraMonths<=0)) {
          return "$years years.";
      } elseif(($years>0) && ($extraMonths<12)) {
          return "$years years $extraMonths months.";
      } elseif(($years<=0) && ($extraMonths<12)) {
          return "$extraMonths months.";
      }
    }

    public function getDescription(){
        return $this->description;
    }
  }