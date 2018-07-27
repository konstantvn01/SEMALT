<?php
/**
 * Created by PhpStorm.
 * User: Orest
 * Date: 26.07.2018
 * Time: 19:43
 */
$conn = new mysqli('localhost', 'root', '', 'laravelTest');
$test="INSERT INTO newtable SET name='hi'";
if($conn->query($test)===TRUE){

    echo "GOOD";
};
