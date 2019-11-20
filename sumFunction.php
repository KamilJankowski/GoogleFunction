<?php
 
function sumDigits(int $num) {
	$numlength = strlen((string)$num);
	$string = (string)$num;
	$result = 0;
	for($i=0;$i<$numlength;$i++){
		$result += $string[$i];
   	}
	echo "Your result is: ";
	echo $result;
  	}
if(isset($_POST['number'])){
  $num=$_POST['number'];
  sumDigits($num);
}
else{
	echo "Please go back to the from.";
}

