<?php
$host = 'localhost';
$user = 'root';
$password = ''; 
$dbname = 'foodhub_eatery';
try {
   $conn = new mysqli($host, $user, $password, $dbname);
} catch (Exception $e ) 
{
    echo "Connection failed" . $e->getMessage();
}
if ($conn) {
    echo "Connected successfully";
} else {
    echo "Connection failed " ;
}
?>
