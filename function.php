<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User defined function</title>
</head>
<body>
    <h1>Use defined function</h1>

    <?php 
        //define a function

        function writemessage(){
            echo '<p> your function will display here </p>';
        }

        //calling a function

        writemessage();
        writemessage();
        writemessage();
        writemessage();

        echo '<hr/>';

        // defining function with parametes

        function addition($num1, $num2){
            $sum = $num1 + $num2 ;
            echo "the sum of $num1 and $num2 is $sum </br>";
        }

        addition(10,20);


    ?>
    
</body>
</html>