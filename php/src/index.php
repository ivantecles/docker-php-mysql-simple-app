<?php
    // Part 1: Uncomment this part to test the PHP Apache container.

    echo "Hello world, I am a PHP Apache container!";
?>

<?php
    // Part 2: Uncomment this part to test the MySQL server container.

    // The host, user and password variables are provided by docker-compose.yml file.
    // $host = 'db';
    // $user = 'MYSQL_USER';
    // $password = 'MYSQL_PASSWORD';

    // // Check MySQL server connection
    // $conn = new mysqli($host, $user, $password);
    // if (!$conn->connect_error) {
    //     echo "Connection to the MySQL server successfully!";
    // } else {
    //     die("Connection to the MySQL server unsuccessfully: " . $conn->connect_error);    
    // }
?>