<?php
        $title = 'Functions';
         include 'includes/header.php';
?>

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
