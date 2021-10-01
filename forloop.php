<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-Home</title>
</head>
<body>
    <h1>Hello World</h1>
    <h2>here are some links to follow rules</h2>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="ifstatement.php">If Statement in php</a></li>
        <li><a href="switch.php">SwitCh StatemenT in PHp</a></li>
        <li><a href="forloop.php">For Loop</a></li>
        <li><a href=""></a></li>
    </ul>
    <?php
        for ($count=0; $count < 10; $count++) { 
            echo '*** the count number is '.$count.' <br>';
        }
    ?>
</body>
</html>