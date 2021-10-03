<?php
        $title = 'Date and Time';
         include 'includes/header.php';
?>
    <?php
    $datenow= getdate();
    echo $datenow['mday'] . 'The date of today<br>';
    echo $datenow['mon'] . '<br>';
    echo $datenow['year'] . '<br>';

    echo time();
    ?>
