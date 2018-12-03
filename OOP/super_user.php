<?php
function __autoload($name) {
    require "$name.php";
}
$obj = new Myclass();