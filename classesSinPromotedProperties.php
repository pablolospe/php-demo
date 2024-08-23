<?php

class SuperHero
{
    // Propiedades 
    public $name;
    public $powers;
    public $planet;
    public $level;

    // Constructor
    public function __construct($name, $planet, $powers)
    {
        $this->name = $name;
        $this->planet = $planet;
        $this->powers = $powers;
        $this->level = 0;
    }

    // Métodos
    public function attack()
    {
        return "¡$this->name ataca con sus poderes!";
    }

    public function description()
    {
        return "$this->name es un superheroe que viene de $this->planet y tiene los siguientes poderes: 
        \"$this->powers\"";
    }
}

// Instanciar la clase

$hulk = new SuperHero( "Hulk", "Hulklandia", "Superfuerza cuando se cabrea.");

echo $hulk->description();
echo $hulk->attack();
