<?php

    $connection = mysqli_connect("localhost","root","","seleratanahair");

    if (mysqli_connect_errno()) {
        echo "MySQL Connection Error: Connection could not be established!" . mysqli_connect_error();
    }

?>
