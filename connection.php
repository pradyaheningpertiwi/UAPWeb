<?php

    $database= new mysqli("localhost","root","","coba");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>