<?php
    /**
     * Created by PhpStorm.
     * User: pavel
     * Date: 8/30/2020
     * Time: 12:07 PM
     */
    
    //Database configuration
    $Host = "localhost";
    $DBname = "vueapis";
    $username = "root";
    $password = "";
    
    $connection = new mysqli($Host,$username,$password,$DBname);
    
    if ($connection->connect_errno)
    {
        die("Invalid Database Connection");
    }