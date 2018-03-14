<?php
    /**
     * For this tasks I had used the Docker container mysql:latest
     * Command for run container:
     * docker run --name mysql -d -e MYSQL_DATABASE=uni -e MYSQL_USER=asharov -e MYSQL_PASSWORD=passw0rd -e MYSQL_ROOT_PASSWORD=passw0rd -p 3306:3306 mysql:latest
     */

    $conn = new mysqli("127.0.0.1", "asharov", "passw0rd", "uni");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $conn->close();

//$result = $mysqli->query("SELECT lastname FROM employees");
?>
