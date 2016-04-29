<<?php
class car {

 private $color;
 private $make;
 private $name;

 public function __construct ($newColor, $newMake, $newName) {
   $this->setColor($newColor);
   $this->setMake($newMake);
   $this->setName($newName);
 }

 public function setColor($newColor) {
       $this->color = $newColor;
     return;
        }

 public function setMake($newMake) {
       $this->make = $newMake;
     return;
        }

   public function setName($newName) {
         $this->name = $newName;
       return;
      }

   public function getColor() {
            return ($this->color);
    }

 public function getMake($newMake) {
     return ($this->make);
        }

 public function getName() {
     return ($this->name);
 }



 public function go() {
   echo  $this->name . "car going";
   return;
 }

 public function stop() {
   echo $this->name . "car stopping";
 }

}

  $fordCar = new Car ("blue", "ford", "fordCar");
  $toyCar = new Car ("red", "toyota", "toycar");

    echo $fordCar->getColor() . "<br>";

    echo $toyCar ->getColor() . "<br>";

    echo $fordCar->go() . "<br>";

    echo $toyCar->go() . "<br>";

    echo $toyCar->stop() . "<br>";

    echo $toyCar->getName() . "<br>";
?>
