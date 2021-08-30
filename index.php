
<?php
echo "Hello world";
$username = "doadmin";
$password = "bdt6o5kiaogw9mvd";
$host = "db-mysql-blr1-17533-do-user-9698993-0.b.db.ondigitalocean.com";
$port = "25060";
$database = "defaultdb";


$conn = mysqli_connect($host.':'.$port, $username, $password,$database);
if($conn){
    echo "connected";
}

if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
}

?>