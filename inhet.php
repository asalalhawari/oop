<?php
class asal {
    protected $make;
    protected $model;

    public function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }

    public function getDetails() {
        return $this->make . $this->model;
    }
}
class Car extends asal{
    private $vin;

    public function __construct($make, $model, $vin) {
        parent::__construct($make, $model);
        $this->vin = $vin;
    }

    public function getDetails() {
        return parent::getDetails() . ", VIN: {$this->vin}";
    }
}





?>