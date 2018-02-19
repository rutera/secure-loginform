<?php
include './conn.php';


function Login($sql, $username){
    //return trim(mysqli_real_escape_string($sql, $username));
    return mysqli_real_escape_string($sql, $username);
}

