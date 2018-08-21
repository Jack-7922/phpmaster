<?php
// // Описываем функцию count()
// function my_count($var, $mode = 0) {
//     if(is_null($var)) return 0;
//     if(!is_array($var)) return 1;
//     $cnt = 0; //Создаем счетчик
//     foreach($var as $v){
//         if(is_array($v) and $mode){
//             $cnt += my_count($v, 1);
//         }
//         $cnt++;
//     }
//     return $cnt;

// }
// function foo(){
//     echo func_num_args(); // Возвращает количество аргументов

//     print_r(func_get_arg());

// }
// foo(1,2,3,4,5);
function bar($p) {}
    function foo($param, $x){
        $param($x);
    }
print_r(get_defined_functions()); // Получаем список всех доступных функций