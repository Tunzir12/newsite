<?php
        $title = 'ForLoop';
         include 'includes/header.php';
?>
    <?php
        for ($count=0; $count < 10; $count++) { 
            echo '*** the count number is '.$count.' <br>';
        }
    ?>
<?php require 'includes/footer.php'?>
