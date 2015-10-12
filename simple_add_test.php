<?php

$_GET['arg1'] = 2;
$_GET['arg2'] = 3;

ob_start();
include 'simple_add.php';
$result = ob_get_clean();

if($result==5){
    echo "simple_add_test passed\n";
}else{
    echo "simple_add_test failed\n";
}