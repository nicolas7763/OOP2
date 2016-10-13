<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

interface iCncmachines {
    function getviewMachines();
}

class Cncmachines implements iCncmachines {
    public $viewMachines ='промышленный';
            function getviewMachines() {
                return $this->viewMachines;
    }

}

interface iCNC {
   public function getTypeCnc();
   public function gettableSize();
   public function getcutterTool();
}

class CNC extends Cncmachines implements iCNC 
{
	public $typeCnc = 'Лазерный';
	public function getTypeCnc()
	{
            return $this->typeCnc;
	}
	private $tableSize = '1.5*2.5m';
	public function gettableSize()
	{
            return $this->tableSize;
	}
	public $cutterTool = 'синий лазер';
	public function getcutterTool()
	{
            return $this->cutterTool;
	}
}
$myCNC = new CNC();

var_dump($myCNC);
?>

<!DOCTYPE html>
<html>
<head>
	<title>ООП</title>
</head>
<body>
</body>
</html>
