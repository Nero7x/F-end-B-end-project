<?php
$conn = mysqli_connect('127.0.0.1', 'root' , 'root' , 'f&b-end');

if(!$conn){
    echo 'Error: ' . mysqli_connect_error();
}