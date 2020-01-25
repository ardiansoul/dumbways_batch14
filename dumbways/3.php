<?php 

function drawline($array)
{
	if (gettype($array) == "string") {
	$arr = str_split($array);
	$i = 0;
	foreach ($arr as $key => $value) {
		while ($i <= $key) {
			echo $value;
			$i++;
			echo "<br>";
			for ($j=0; $j < $i; $j++) { 
			echo '&nbsp';
			echo '&nbsp';
			echo '&nbsp';
			echo '&nbsp';
			}
		}
	}
	


	}
	else {
		echo "itu bukan string";
	}
}

drawline("dumbways");






 ?>