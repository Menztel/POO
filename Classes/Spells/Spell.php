<?php

namespace App\Classes\Spells;

class Spell {
    private string $name;
    private string $description;
    private int $manaCost;
    private string $element;
    
    public function __construct($name, $description, $manaCost, $element) {
      $this->name = $name;
      $this->description = $description;
      $this->manaCost = $manaCost;
      $this->element = $element;
    }
    
    public function getName() {
      return $this->name;
    }
    
    public function getDescription() {
      return $this->description;
    }
    
    public function getManaCost() {
      return $this->manaCost;
    }

    public function getElement(){
        return $this->element;
    }
  }

?>