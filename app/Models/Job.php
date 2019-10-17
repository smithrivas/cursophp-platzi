<?php
namespace App\Models;

// Clase que hereda de BaseElement
class Job extends BaseElement{
    public function __construct($title, $description){
        $newTitle = 'Job: '.$title;
        // Para heredar constructos de la clase padre
        //parent::__construct($newTitle, $description);
        $this->title = $newTitle;
    }

    function getDurationAsString(){
        $years = floor($this->months/12); // Valor en años
        $extraMonths = $this->months % 12; // Valor en meses
        if (($years>0) && ($extraMonths<=0)) {
            return "Job duration: $years years.";
        } elseif(($years>0) && ($extraMonths<12)) {
            return "Job duration: $years years $extraMonths months.";
        } elseif(($years<=0) && ($extraMonths<12)) {
            return "Job duration: $extraMonths months.";
        }
      }      
}