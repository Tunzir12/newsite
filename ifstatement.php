<?php
         include 'includes/header.php';
    ?>
    <h3 style="color:red;">here is the example output</h3>

    <?php
        $grade = 20;
        
        if($grade >= 50){
            echo "You Have Passed the exam by ".$grade;
        }else{
            echo "<h5 style='color: red'> You Have failed </h5>";
        }
    ?>
