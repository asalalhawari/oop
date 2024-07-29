<?php

// class Car {
   
//     private $make;
//     private $model;
//     private $vin;

    
//     public function __construct($make, $model, $vin) {
//         $this->make = $make;
//         $this->model = $model;
//         $this->vin = $vin;
//     }
                                

//     public function __destruct() {
//         echo "The car with VIN {$this->vin} is destroyed.<br>";
//     }

    
//     public function getDetails() {
//         return " $this->make, $this->model,  $this->vin";
//     }

    
//     public function getMake() {
//         return $this->make;
//     }

//     public function setMake($make) {
//         $this->make = $make;
//     }

//     public function getModel() {
//         return $this->model;
//     }

//     public function setModel($model) {
//         $this->model = $model;
//     }

//     public function getVin() {
//         return $this->vin;
//     }

//     public function setVin($vin) {
//         $this->vin = $vin;
//     }
// }






// class Inventory {
    
//     private $cars = [];

  
//     public function addCar(Car $car) {
//         $this->cars[] = $car;
//     }

   
//     public function removeCar($vin) {
//         foreach ($this->cars as $key => $car) {
// if ($car->getVin() === $vin) {
//                 unset($this->cars[$key]);
//                 echo "$vin <br>";
//                 return;
//             }            
//         }
//         echo $vin;
//     }

   
//     public function listCars() {
//         foreach ($this->cars as $car) {
//             echo $car->getDetails() . "<br>";
//         }
//     }
// }


// $car1 = new Car("bmw", "Corolla", "962001");
// $car2 = new Car("toyota", "Civic", "4545");
// $car3 = new Car("reng", "Mustang", "5356");

// $inventory = new Inventory();
// $inventory->addCar($car1);
// $inventory->addCar($car2);
// $inventory->addCar($car3);


// $inventory->listCars();


// $inventory->removeCar("4545");

// $inventory->listCars();


// class asal{
//     protected $make;
//     protected $model;

//     public function __construct($make, $model) {
//         $this->make = $make;
//         $this->model = $model;
//     }

//     public function getDetails() {
//         return $this->make . $this->model;
//     }
    
// }
// $car = new Car("rengrovar", "mm", "2001");
// echo $car->getDetails(); 

// class Car extends asal {
//     private $vin;

//     public function __construct($make, $model, $vin) {
//         parent::__construct($make, $model);
//         $this->vin = $vin;
//     }

//     public function getDetails() {
//         return parent::getDetails() . $this->vin;
//     }
// }











class Student {
    private $name;
    private $age;
    private $studentID;

    public function __construct($name, $age, $studentID) {
        $this->name = $name;
        $this->age = $age;
        $this->studentID = $studentID;
    }

    public function __destruct() {
        echo  $this->studentID. "no no no no<br>";
    }

    public function getDetails() {
        return  $this->name. $this->age .$this->studentID;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getStudentID() {
        return $this->studentID;
    }


    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }
}


class Classroom {
    private $students = [];

    public function addStudent(Student $student) {
        $this->students[] = $student;
    }

    public function removeStudent($studentID) {
        foreach ($this->students as $key => $student) {
            if ($student->getStudentID() === $studentID) {
                unset($this->students[$key]);
                echo " $studentID.<br>";
                return;
            }
        }
        echo    "This is a message because you are working online .<br>";
    }

    public function listStudents() {
        foreach ($this->students as $student) {
            echo $student->getDetails() . "<br>";
        }
    }
}


$student1 = new Student("asal", 22, "2001");
$student2 = new Student("omar", 20, "2004");
$student3 = new Student("Abed", 19, "2005");


$classroom = new Classroom();

$classroom->addStudent($student1);
$classroom->addStudent($student2);
$classroom->addStudent($student3);


$classroom->listStudents();


$classroom->removeStudent("2004");


$classroom->listStudents();
?>


























