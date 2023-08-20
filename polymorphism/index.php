<?php

class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function name() {
        return $this->name;
    }

    public function makeSound() {
        return "Animal sound";
    }
}

class Dog extends Animal {
    public function makeSound() {
        return "Woof Woof!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow Meow!";
    }
}

class Cow extends Animal {
    public function makeSound() {
        return "Moo Moo!";
    }
}

// Usage
$animals = [
    new Dog("Dog"),
    new Cat("Cat"),
    new Cow("COw")
];

foreach ($animals as $animal) {
    echo $animal->name(). " makes: " . $animal->makeSound() . "<br>";
}

?>
