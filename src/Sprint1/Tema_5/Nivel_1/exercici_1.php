<?php 
abstract class Animal{
  abstract public function makeSound(): string;
}

class Dog  extends Animal{
  public function makeSound(): string{
    return "Guau";
  }
}

class Cat  extends Animal{
  public function makeSound(): string{
    return "Miau";
  }
}

class Bird  extends Animal{
  public function makeSound(): string{
    return "Pio Pio";
  }
}

$dog = new Dog();
$cat = new Cat();
$bird = new Bird();
echo $dog->makeSound(). "\n";
echo $bird->makeSound(). "\n";
echo $cat->makeSound(). "\n";