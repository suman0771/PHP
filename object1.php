<?php

class vehicle{
    //properties
    public $type;
    public $brand;

   
    //method
    function set_type($type){
        $this->type = $type;
    }
    function get_type(){
        return $this->type;
    }
    function set_brand($brand){
        $this->brand = $brand;
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
