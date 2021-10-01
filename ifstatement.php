<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Statemnt</title>
</head>
<body>
<h2>here are some links to follow rules</h2>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="ifstatement.php">If Statement in php</a></li>
        <li><a href="forloop.php">For Loop</a></li>
        <li><a href="array.php">Array</a></li>
        <li><a href="switch.php">SwitCh StatemenT in PHp</a></li>
        <li><a href=""></a></li>
        <li><a href=""></a></li>
    </ul>
    <h3 style="color: blueviolet;">here is the example output</h3>

    <?php
        $grade = 20;
        
        if($grade >= 50){
            echo "You Have Passed the exam by ".$grade;
        }else{
            echo "<h5 style='color: red'> You Have failed </h5>";
        }
    ?>
</body>
</html>