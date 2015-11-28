<?php
	class FizzBuzz
	{
		 public static function recieve($num){
		 	if($num%3==0 and $num%5==0)
		 	{
		 		return "FizzBuzz";
		 	}
		 	if($num%5 == 0)
		 	{
		 		return "Buzz";
		 	}
		 	if($num%3 == 0)
		 	{
		 		return "Fizz";
		 	}
		 	else
		 	{
		 		return $num;
		 	}
		 }
	}
?>