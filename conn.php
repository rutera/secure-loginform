<?php
$sql = mysqli_connect('localhost', 'root', 'rutera', 'seclogin');
mysqli_set_charset($sql, 'utf8');

if(!$sql){
    $err = 'Opps!';
}
