<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

interface iSpaces {
    function getpurpose();
}

class Spaces implements iSpaces {
public $purpose = 'жилое';
    function getpurpose()
{
        return $this->purpose; 
    }

}


interface iRoom {
  public function changeColor($color);
  public function getSize();
  public function getLocation();
}

class Room extends Spaces implements iRoom
{
	public $color ='белая';
	public function changeColor($color)
	{
            return $this->color = $color;
	}

	private $size ='20квм';
	public function getSize()
	{
            return $this->size;
	}
	private $location ='Rostov';
	public function getLocation()
	{
            return $this->location;
	}
}

$myRoom = new Room();
$myRoom->changeColor('black');
var_dump($myRoom);
echo "<br />";
?>
<!DOCTYPE html>
<html>
<head>
	<title>ООП</title>
</head>
<body>
</body>
</html>
