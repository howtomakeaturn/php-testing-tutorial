<?php
include 'add_blog_to_db.php';

$title = $_POST['title'];
$content = $_POST['content'];

$result = add_blog_to_db($title, $content);

?>
<h1>Title: <?php echo $result[0] ?></h1>
<div>
<?php echo $result[1] ?>
</div>