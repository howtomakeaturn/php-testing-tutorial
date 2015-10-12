<?php

$_POST['title'] = 'My First Blog Post';
$_POST['content'] = 'This is my first article. I am happy to share with you.';

ob_start();
include 'blog_submit.php';
$result = ob_get_clean();


if (strpos($result,'My First Blog Post') !== false) {
    echo "blog_submit_test for title passed\n";
}else{
    echo "blog_submit_test for title failed\n";
}

if (strpos($result,'I am happy') !== false) {
    echo "blog_submit_test for content passed\n";
}else{
    echo "blog_submit_test for content failed\n";
}