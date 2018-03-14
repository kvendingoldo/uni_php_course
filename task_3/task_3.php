<?php
    $connection = @new mysqli("127.0.0.1", "asharov", "passw0rd", "uni");

    if ($connection->connect_error) {
        echo "Error: " . $connection->connect_error;
        exit();
    } else {
        echo 'Connected to MySQL';
    }

    $sql = 'SELECT * FROM test_table';
    $query 	= mysqli_query($connection, $sql);
    while ($row = mysqli_fetch_array($query)) {
        echo $row['data']."\n";
    }

    $connection->close();