<?php

$con=new mysqli('localhost', 'root', '', 'gymdata');

if(!$con){
    die(mysqli_error($con));
}