<?php 
function test($var = false) {
    try {
        echo "start\n";
        if (!$var) {
            throw new Exception("\$var is false\n");
        }
        echo "Continue\n";
    }
    catch(Exception $e) {
        echo "Exception: " , $e->getMessage() . "\n";
        echo "in file: " , $e->getFile() . "\n";
        echo "on line: " , $e->getLine() . "\n";
    }
    echo "The end\n";
}
print_r(test(), test(1));