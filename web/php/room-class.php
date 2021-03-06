<?php
#create a class for rooms
class Room {
// Properties
public $name;
public $price;
public $capacity;
public $roomNumber;
public $totalPrice;

# this is a constructor
function __construct(string $name ,int $price , int $capacity) {
    $this->name = $name;
    $this->price = $price;
    $this->capacity = $capacity;

    }
    # This method is calculate the price and number of rooms for specific room and number of persons
    function calculator($corrPrice , $corrRoom , $diffNight) {
        $this->roomNumber = round($corrRoom/$this->capacity);
        $this->totalPrice = $corrPrice * $this->price * $diffNight;
    }
    function printCal(){
        echo '<b>Daily price for '.$this->name.' room is '.$this->price.' Euro</b><br>';
        echo '<b>For you '.$this->roomNumber.' Rooms are requiered</b><br>';
        echo '<b>you have selected '.$diffNight.' nights</b><br>';
        echo '<b>Total price for this room for '.$diffNight.' nights is: '.$this->totalPrice. ' euro</b><br>';
    }

}

$startHolidays = new DateTime('2021-12-15');
$endHolidays = new DateTime('2022-01-15');















?>