<?php
require_once 'searchReplace.php';

//call run function to execute logic to replace text
$result = new searchReplace();

echo $result->run($_POST['text'], $_POST['searchFor'], $_POST['replaceWith'])
?>

<?php
//load form to enter values
require_once 'form.php';