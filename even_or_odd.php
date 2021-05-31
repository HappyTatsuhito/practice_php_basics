<?php
    $num = $argv[1];
    $str_num = (string) $num;
    echo "{$str_num}は";
    if($num % 2 == 0){
        echo '偶数です。' . PHP_EOL;
    }
    else{
	echo '奇数です。' . PHP_EOL;
    }
?>
