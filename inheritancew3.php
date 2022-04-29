<?php

class vehicle{
    //properties
    public $type;
    public $brand;

   
    //method
    
    function get_type(){
        return $this->type;
    }
    
    function get_brand(){
        return $this->brand;
    }
    public function intro(){
        echo "The type is $this->type and the brand is $brand->brand.";
    }
}
//car is inherited from vehicle
class Car extends Vehicle{
    public function message(){
        echo "This is the child class";
    }
}

$car = new Car();
$car->message();

