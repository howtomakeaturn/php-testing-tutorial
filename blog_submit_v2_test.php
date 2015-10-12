<?php
include 'add_blog_to_db.php';

$title = 'My First Blog Post';
$content = 'This is my first article. I am happy to share with you.';

$result = add_blog_to_db($title, $content);

if (strpos($result[0],'My First Blog Post') !== false) {
    echo "blog_submit_test for title passed\n";
}else{
    echo "blog_submit_test for title failed\n";
}

if (strpos($result[1],'I am happy') !== false) {
    echo "blog_submit_test for content passed\n";
}else{
    echo "blog_submit_test for content failed\n";
}