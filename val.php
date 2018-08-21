<?php
$hour = (int)strftime('%H');
$welcome = 'Great';
if ($hour > 18 && $hour < 23)
	echo("Доброй ночи $welcome");
elseif ($hour > 0 && $hour < 6) {
	echo "Доброе утро $welcome";
}
elseif($hour > 6 && $hour < 18){
	echo "Добрый день $welcome";
}
else{
	echo "Доброй ночи!";
}

?>