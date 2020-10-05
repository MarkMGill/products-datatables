<?php
    $connection = mysqli_connect('localhost', 'root', '', 'productsapp');
    if(!$connection) {
        die('db connection failed');
    }

