<?php
require_once 'searchReplace.php';

$result = new searchReplace();

echo $result->run($_POST['text'], $_POST['searchFor'], $_POST['replaceWith'])
?>

<?php

require_once 'form.php';