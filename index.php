<?php

require __DIR__ . '/vendor/autoload.php';

use src\MessageFromDay;

$actual = (new MessageFromDay())->showMessage(strtolower(date('l')));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Days and messages</title>
</head>
<body>
    <h1>Today is <?php echo date('l'); ?></h1>
    <p><b><?php echo $actual ?></b></p>
</body>
</html>
