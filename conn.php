<?php
$sql = mysqli_connect('localhost', 'root', 'PASS', 'seclogin');
mysqli_set_charset($sql, 'utf8');

if(!$sql){
    $err = 'Opps!';
}
