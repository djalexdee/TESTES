<?php
$var=0;

	for ($i=0; $i < 100; $i++) { 
		$var++;
		if(($var % 3) == 0  && ($var % 5) == 0)
		{
		  echo("FizzBuzz <br />");
		} elseif (($var % 3) == 0) {
			echo("Fizz <br />");
		}elseif (($var % 5) == 0) {
			echo("Buzz <br />");
		}else 
			echo($var."<br />");

}
?>