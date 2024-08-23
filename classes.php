<?php

class SuperHero
{
    // Propiedades 


    // Constructor
    public function __construct(
        readonly public string $name,
        public string $planet,
        private array $powers,
    ) {}

    // Métodos
    public function attack()
    {
        return "¡$this->name ataca con sus poderes!";
    }

    public function show_all(){
        return get_object_vars($this);
    }

    public function description()
    {
        $powers = implode(", ", $this->powers);
        return "$this->name es un superheroe que viene de $this->planet y tiene los siguientes poderes: 
        $powers";
    }
}


// Instanciar la clase

$hulk = new SuperHero("Hulk", "Hulklandia", ["Superfuerza", "Pocas Pulgas"]);

$hulk->planet = "pepe";

var_dump($hulk->show_all());
echo $hulk->description();
// echo $hulk->attack();
