<?php
$size 	= 	ini_get("post_max_size");
$letter	= 	$size{strlen($size) - 1};
$size 	= 	(int)$size;

switch(strtoupper($letter)){
	case "G": $size *= 1024; break; 
	case "M": $size *= 1024; break;
	case "K": $size *= 1024; break;
}

echo $size  . '<br />';