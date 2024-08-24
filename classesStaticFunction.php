<?php

class Beatle
{
    // Constructor
    public function __construct(
        readonly public string $name,
        public int $age,
        private string $instrument,
    ) {}

    public function show_all(){
        return get_object_vars($this);
    }

    public function description()
    {
        return "The beatle name is $this->name, he has $this->age years and plays $this->instrument. ";
    }
    public static function random(){
        $names = ["Paul", "John", "George", "Ringo"];
        $ages = [20,25,30,35];
        $instruments = ["guitar", "bass", "drums", "keyboard", "maracas"];

        $name = $names[array_rand($names)];
        $age = $ages[array_rand($ages)];
        $instrument = $instruments[array_rand($instruments)];

        // echo "The beatle name is $name, he has $age years and plays $instrument.";
        return new self($name, $age, $instrument);
    }
}

// $beatle1 = Beatle::random();
// $beatle2 = Beatle::random();

// echo $beatle1->description();
// echo $beatle2->description();
