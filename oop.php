<?php

class Car {
   
    private $make;
    private $model;
    private $vin;

    
    public function __construct($make, $model, $vin) {
        $this->make = $make;
        $this->model = $model;
        $this->vin = $vin;
    }


    public function __destruct() {
        echo "The car with VIN {$this->vin} is destroyed.<br>";
    }

    
    public function getDetails() {
        return " $this->make, $this->model,  $this->vin";
    }

    
    public function getMake() {
        return $this->make;
    }

    public function setMake($make) {
        $this->make = $make;
    }

    public function getModel() {
        return $this->model;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function getVin() {
        return $this->vin;
    }

    public function setVin($vin) {
        $this->vin = $vin;
    }
}






class Inventory {
    
    private $cars = [];

  
    public function addCar(Car $car) {
        $this->cars[] = $car;
    }

   
    public function removeCar($vin) {
        foreach ($this->cars as $key => $car) {
            if ($car->getVin() === $vin) {
                unset($this->cars[$key]);
                echo "$vin <br>";
                return;
            }
        }
        echo $vin;
    }

   
    public function listCars() {
        foreach ($this->cars as $car) {
            echo $car->getDetails() . "<br>";
        }
    }
}


$car1 = new Car("bmw", "Corolla", "962001");
$car2 = new Car("toyota", "Civic", "4545");
$car3 = new Car("reng", "Mustang", "5356");

$inventory = new Inventory();
$inventory->addCar($car1);
$inventory->addCar($car2);
$inventory->addCar($car3);


$inventory->listCars();


$inventory->removeCar("4545");


$inventory->listCars();


























?>