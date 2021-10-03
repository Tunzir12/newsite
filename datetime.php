<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-Home</title>
</head>
<body>
    <h1>Date and time manipulation</h1>
    <h2>here are some links to follow rules</h2>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="ifstatement.php">If Statement in php</a></li>
        <li><a href="forloop.php">For Loop</a></li>
        <li><a href="switch.php">SwitCh StatemenT in PHp</a></li>
        <li><a href="array.php">Array</a></li>
        <li><a href="string.php">string Manipulation</a></li>
        <li><a href="datetime.php">Date and time Manipulation</a></li>
    </ul>
    <?php
    $datenow= getdate();
    echo $datenow['mday'] . 'The date of today<br>';
    echo $datenow['mon'] . '<br>';
    echo $datenow['year'] . '<br>';

    echo time();
    ?>
</body>
</html>