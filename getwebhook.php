<?php
//echo '<h1>test</h1>';

$info = file_get_contents('php://input');
file_put_contents('test.txt', $info);
return json_decode($_POST);

?>