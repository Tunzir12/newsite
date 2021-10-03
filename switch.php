<?php
        $title = 'Switch';
         include 'includes/header.php';
?>
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
<?php require 'includes/footer.php'?>
