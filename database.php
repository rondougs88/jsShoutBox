<?php

//Connect to MySQL
$con = mysqli_connect("localhost","root","12345","jsshoutbox");

if(mysqli_connect_errno()){
    echo 'Failed connection: ' .mysqli_connect_errno();
}

