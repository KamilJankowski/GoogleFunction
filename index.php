<?php
 //This function will split number to digits and sum them
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
	//Display form
	echo "<html>
        <body>
        <h3>Please enter your number</h3>
        <form action='' method='post'>
        Number: <input type='number' name='number'><br>
        <input type='submit'>
        </form>
        </body>
        </html>";

//Read the number and display the result
if(isset($_POST['number'])){
  $num=$_POST['number'];
	if(is_numeric($num)){
  		sumDigits($num);
	}
	else{
		echo "This is not a number. Please try again."
	}
}
else{
	echo "No result.";
}

?>
