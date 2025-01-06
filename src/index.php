
<?php
$servername = getenv('MYSQL_HOST');  // mysql-service
$username = getenv('MYSQL_USER');    // testuser
$password = getenv('MYSQL_PASSWORD'); // testpassword
$dbname = getenv('MYSQL_DATABASE');  // testdb


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to MySQL database";
?>
