<?php 

$kelas = 'new';

foreach ($category as $cat) {
	if ($kelas ==  $cat->lv2) {
		echo "$cat->lv3 <br>";

		$kelas = $cat->lv2;
	}else{
		echo "<br>";
		echo "$cat->lv2 <br>";
		echo "$cat->lv3 <br>";
		$kelas = $cat->lv2;		
	}
}


?>