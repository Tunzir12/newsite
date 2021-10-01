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
        <li><a href="forloop.php">For Loop</a></li>
        <li><a href="switch.php">SwitCh StatemenT in PHp</a></li>
        <li><a href="array.php">Array</a></li>
        <li><a href="string.php">string Manipulation</a></li>
    </ul>
    <?php
        $phrase1= "we all are gonna die someday,";
        $phrase2= "Make sure you lived before you die.";

        echo $phrase1 . ' ' .$phrase2;

         $name= "maliha tunzira";

         echo ucfirst($name).'<br>';
         echo ucwords($name).'<br>';
         echo strtoupper($name).'<br>';
        echo strtolower($name).'<br>';


    ?>
</body>
</html>