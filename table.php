<?php
// $cols = 10;
// $rows = 10;
// $color ="red";

function drawTable($cols = 10, $rows = 10, $color = "red"){
	static $cnt;
	$cnt++;
		echo "Таблица рисуется $cnt раз<br />";
		echo "<table border ='3'>";
	for($i=1; $i <= $cols; $i++) {
		echo "<tr>";
		for($x = 1; $x <= $rows; $x++){
			if($i == 1 or $x == 1)
				echo "<th style='background: $color'>" . $i * $x . "</th>";
			else
				echo "<th style='backround: $color'>" . $i * $x . "</th>";

		}
		echo "</tr>";
	}
	echo "</table>";
}

drawTable();
drawTable(5, 5, "yellow");

?>