<?php

    /*$sname = "localhost";
    $uname = "root";
    $password= "";
    $dbname = "crudopeartion";*/

    $con = new mysqli('localhost','root','','crudoperation');

    if(!$con){
        die(mysqli_error($con));
    }
?>