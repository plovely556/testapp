
<?php
echo "Hello world";
$username = "doadmin";
$password = "bdt6o5kiaogw9mvd";
$host = "db-mysql-blr1-17533-do-user-9698993-0.b.db.ondigitalocean.com";
$port = "25060";
$database = "defaultdb";


$conn = mysqli_connect($host.':'.$port, $username, $password);
$db=mysqli_select_db($database,$conn);
if($db){
    echo "connected";
}

if ($db -> connect_errno) {
    echo "Failed to connect to MySQL: " . $db -> connect_error;
    exit();
}

?>