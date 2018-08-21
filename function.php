<?php
	function say($name, $h = 1) {
		echo "<h$h> Hello, $name</h$h>";
	}

	say("John");
	say("qwerty");
	$str = "say";
	$str("great");