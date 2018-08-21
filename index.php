<h3>Зачем мы ходим в школу </h3>
<blockquote>
	
    <?php   //echo strftime('Сегодня %d %m %Y <br />');
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

    echo ("<h1>Why???<h1>");
    // Установка локали и выбор даты
    setlocale(LC_ALL, "russian");
    $day = strftime('%d');
    
    $mon = strftime('%B');
    $mon = iconv('windows-1251', 'utf-8', $mon);
    $yea = strftime('%Y');

    echo "Сегодня " , $day;
    define("USER_NAME", "VASYA");
    echo USER_NAME;
    echo "<br />";
?>
<?= $mon ?>
</blockquote>
