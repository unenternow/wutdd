<?php
	class FizzBuzz
	{
		 public static function recieve($num){
		 	$result;

		 	if($num%3==0 and $num%5==0)
		 	{
		 		$result = "FizzBuzz";
		 	}
		 	else if($num%5 == 0)
		 	{
		 		$result = "Buzz";
		 	}
		 	else if($num%3 == 0)
		 	{
		 		$result = "Fizz";
		 	}
		 	else
		 	{
		 		$result = $num;
		 	}
		 		
		 		return $result;
		 }
	}
?>