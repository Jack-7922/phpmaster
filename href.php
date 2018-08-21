<?php
$enu = [
	['link' => 'Домой', 'href' => 'index.php'],
	['link' => 'О нас', 'href' => 'about.php'],
	['link' => 'Контакты', 'href' => 'contact.php'],
	['link' => 'Таблица умнжения', 'href' => 'table.php'],
	['link' => 'Калькулятор', 'href' => 'calc.php'],
];

/*echo "<ul>";
foreach($leftMenu as $item){
	echo "<li>";
	echo "<a href=''> {$item['link']}  </a>";
	echo "</li>";

}
echo "</ul>";	
?>*/

function drawMenu($menu, $vertical = true) {
    	$style = "";
    	if(!$vertical) {
    		$style = " 	style='display:inline;
    					margin-right: 15px'";
    	}
    	echo "<ul>";
		foreach($menu as $item){
			echo "<li$style>";
			echo "<a href=''> {$item['link']}  </a>";
			echo "</li>";
		}
		echo "</ul>";	
   }
?>