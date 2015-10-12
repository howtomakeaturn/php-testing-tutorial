<?php

function execute($arg1, $arg2){
    $_GET['arg1'] = $arg1;
    $_GET['arg2'] = $arg2;
    ob_start();
    include 'simple_add.php';
    return ob_get_clean();
}

$result = execute(1, 1);

if($result==2){
    echo "simple_add_test passed\n";
}else{
    echo "simple_add_test failed\n";
}

$result = execute(1, 2);

if($result==3){
    echo "simple_add_test passed\n";
}else{
    echo "simple_add_test failed\n";
}

$result = execute(1, -1);

if($result==0){
    echo "simple_add_test passed\n";
}else{
    echo "simple_add_test failed\n";
}

$result = execute(0, -1);

if($result==-1){
    echo "simple_add_test passed\n";
}else{
    echo "simple_add_test failed\n";
}