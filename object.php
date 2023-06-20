<?php 
class Car
{
    public $color;
    public $model;
    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }

    public function message()
    {
        return "My Car is a " . $this->color . " ". $this->model ."!";
    }

    
}
$myCar = new  Car('Biru','Avanza');
echo $myCar->message();

$myCar = new  Car('MErah','BMW');
echo $myCar->message();

?>