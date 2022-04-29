<?php

class vehicle{
    //properties
    public $type;
    public $brand;

    //constructor
    function __construct($type,$brand){
        $this->type = $type;
        $this->brand = $brand;
    }

    //method
    function set_type($type){
        $this->type = $type;
    }
    function get_type(){
        return $this->type;
    }
    
    function get_brand(){
        return $this->brand;
    }
}
$car = new vehicle();
$car->set_type('car');
$car->set_brand('BMW');
echo "Type of car ".$car->get_type();
echo "Brand of car ".$car->get_brand();
