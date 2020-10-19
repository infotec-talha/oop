<?php
//define class in oop and use
 class bike
{
     var $model=2020;
     var $start='Kick';
     var $brand='Honda';
     function model()
     {
         $this->model;
     }
     function brand()
     {
         $this->brand;
     }
     function start()
     {
         $this->start;
     }
} 
$bike_one=new bike;
$bike_two=new bike;
//echo $bike_one->brand();
echo $bike_one->brand='Yamaha';
echo "<br>";
echo $bike_two->brand;
echo "<br>";
echo "bike one is $bike_one->start start,brand is $bike_one->brand and model is $bike_one->model.";
echo "<br>";
$bike_two->start='Self';
echo "bike two is $bike_two->start start,brand is $bike_two->brand and model is $bike_two->model.";
echo "<br>";
//increase use ability of class with constucter function
 class car
{
 function __construct($m,$b,$y) {
     $this->model=$m;
     $this->make=$b;
     $this->year=$y;
 }
}

$car=new car('Civic','Honda',2018);
$car_two=new car('Xli','Toyota',2020);
echo "Car one model $car->model make by $car->make and year is $car->year.";
echo "<br>";
echo "Car two model $car_two->model make by $car_two->make and year is $car_two->year.";
//overriding or inheritance class in oop and use of destruct function
echo "<br>";
class newCar extends car
{
    function __construct($m, $b, $y,$u) {
          $this->model=$m;
          $this->make=$b;
          $this->year=$y;
          $this->use=$u;
          
    }
    function __destruct() {
        echo "My new car model {$this->model} make by {$this->make},year is {$this->year} and use for {$this->use}.";
    }
}
$new_car=new newCar('Benz','Mercidies',2019,'Race');
//echo "<br>";
//echo "My new car model $new_car->model make by $new_car->make,year is $new_car->year and use for $new_car->use.";