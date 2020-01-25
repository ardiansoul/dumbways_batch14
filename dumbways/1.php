<?php 
function lovebird()
{
	$lovebird = 6969;
	$i=1;
	$totallovebird=0;
	while ($i <= 441) {
		if ($i % 21 == 0)
		{
			
			$lovebird_mati = ceil($lovebird*0.111/100);
			
			$lovebird = ($lovebird-$lovebird_mati);
			
			$totallovebird +=$lovebird;
			
			echo "pada hari ke-$i lovebird yang mati berjumlah $lovebird_mati total lovebird berjumlah $totallovebird ";
			echo "<br>";
		} 
		$i++;
	}
}

lovebird();

 ?>