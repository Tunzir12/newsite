<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch Statement in PHP</title>
</head>
<body>
<h2>here are some links to follow rules</h2>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="ifstatement.php">If Statement in php</a></li>
        <li><a href="array.php">Array</a>Array</li>
        <li><a href="switch.php">SwitCh StatemenT in PHp</a></li>
        <li><a href=""></a></li>
        <li><a href=""></a></li>
    </ul>
    <?php
        $grade = 'A';
        
        switch ($grade) {
            case 'A':
                echo 'You are a superstar';
                break;

            case 'B':

                echo 'You are good';

                break;
            
            default:
                echo 'You are weak';
                break;
        }
    ?>
</body>
</html>