<?php
$error = filter_input(INPUT_GET, 'err', $filter = FILTER_SANITIZE_STRING);
 
if (! $error) {
    $error = 'Hoppsan, nåt skumt har hänt';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Fel</title>
        <link rel="stylesheet" href="styles/ifcstyle.css" />
    </head>
    <body>
        <h1>Hoppsan, något har gått fel</h1>
        <p class="error"><?php echo $error; ?></p>  
    </body>
</html>