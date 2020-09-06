<?php

function Open_Connection()
{
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "e-commerce";

    $conn = mysqli_connect($server, $username, $password, $dbname);
    return $conn;
}