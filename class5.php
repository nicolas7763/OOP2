<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

interface iIndustry {
    function gettype();
}

class Industry implements iIndustry {
    public $type = 'пищевая промышленность';
            function gettype() {
                return $this->type;
    }

}

interface iProduct {
    public function getName();
    public function getPrice();
    public function getCategory();
}

class Product extends Industry implements iProduct
{
	public $name ="Молоко";
	public function getName()
	{
            return $this->name;
	}
	public $price = '56рублей';
	public function getPrice()
	{
            return $this->price;
	}
	public $category = 'Молочные продукты';
	public function getCategory()
	{
            return $this->category;
	}

}
$ourProducts = new Product();

var_dump($ourProducts);
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

