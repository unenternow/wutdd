<?php
class RomanNumber
{
	public function convert($number)
	{

			$conv = array(
	        array("letter" => 'I', "number" => 1),
	        array("letter" => 'V', "number" => 5),
	        array("letter" => 'X', "number" => 10),
	        array("letter" => 'L', "number" => 50),
	        array("letter" => 'C', "number" => 100),
	        array("letter" => 0, "number" => 0)
	    	);
	   for($num=0; $num<=50 ; $num++){
	   	if ($num<=3) {
	   		for ($i=0; $i <= 3 ; $i++) { 
	   			echo "I";
	   		}
	   	}

	   }

	}
}

