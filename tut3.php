<?php
    echo "This website is about the data-types";
    $name="Anubhav"; // example of a string
    $income=500; // example of integer
    /*
        String
        float
        integer
        boolean
        object
        array
        null
    */
    echo '<br>';
    $friend="Harshit";
    echo "My name is <h1>$name</h1> and mera beta ka naam hai <h1>$friend</h1>";

    // to know about the data-types var_dump function is used.
    echo var_dump($friend);

    // Object - Instances of classes
    $friends = array('harshit','aks','mgna','ygn','anubhav' );
    echo "<br> <br> This is my friend-zone :".$friends;
    // $i=0;
    // while ($friends) {
    //     echo $friends[$i];
    //     $i++;
    // }

    // if we want to two string then we will use a . operator
    echo "<br>";
    echo "<br>";
    // strrev is used to reverse a string
    echo strrev($friend);
    echo "<br>";
    echo "<br>";
    // to search in a string --> strpos
    echo strpos($friend, "i");
    echo "<br>";
    echo "<br>";
    // str_repeat --> is used to repeat the string
    echo str_repeat($name, 5);
    echo "<br>";
    echo "<br>";
    // str_replace --> used for replacing the string 
    echo "harshit ---> ";
    echo str_replace("harshit", "anubhav",$name);
    // rtrim --> used to trim the white spaces
    echo "<br>";
    echo "<br>";
    echo rtrim("<pre>   <strong>  this is a good boy      </strong> </pre>");
    ?>

