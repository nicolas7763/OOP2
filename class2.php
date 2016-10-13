<?php
interface iPc {
    public  function getoperSys();
    public  function gettypeBios();
            
}

class Pc implements iPc {
    public $operSys = 'win7';
    public $typeBios = 'ver. 1.021';
    public  function getoperSys() {
        
        return  $this->operSys;
    }
        public  function gettypeBios() {
               
        return  $this->typeBios;
    }
}
$myComp = new Pc();
//var_dump($myComp);

interface iLaptop {
   public function getmodel(); 
   public function getdisplaySize();
   public function gettype();
}

class Laptop extends Pc implements iLaptop
{
    private $model = 'hp pavilion' ;
    public function getmodel() {
        return $this->model;
    }
    private $displaySize = '17';
    public function getdisplaySize(){
        return $this->displaySize;
    }
    private $type = 'notebook';
    public function gettype(){
        return $this->type;
    }
    
   
}
$myNote = new Laptop();

var_dump($myNote);  
?>
<!DOCTYPE html>
<html>
<head>
	<title>ООП</title>
</head>
<body>
    <p>Буду краток, ибо нефиг. Полиморфизм, это когда в зависимости от того, что 
    произошло, совершается то или иное действие. Наследование, как оказалось,
    очень нужная штука, грубо говоря не пишем портянок, передаем свойства родителя
    детям буквально указывая на родителя. Как то так.</p> 
</body>
</html>


