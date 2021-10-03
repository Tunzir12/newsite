<?php
         include 'includes/header.php';
    ?>
    <?php
        $phrase1= "we all are gonna die someday,";
        $phrase2= "Make sure you lived before you die.";

        echo $phrase1 . ' ' .$phrase2;

         $name= "maliha tunzira";

         echo ucfirst($name).'<br>';
         echo ucwords($name).'<br>';
         echo strtoupper($name).'<br>';
        echo strtolower($name).'<br>';

        //find a position with strpos

        echo '<br>find  character of '.strpos($name, 'h');
        echo '<br>find  character of '.strpos($name, 'i');
        echo '<br>find  character of '.strpos($name, 'a');
        echo '<br>find  character of '.strpos($name, 'm');

        //find length

        echo 'Find length of string: '. strlen($phrase1) .'<br>';



    ?>
