<?php
$servername = "sql1.njit.edu";
$username = "atj2";
$password = "A.Cherry8890";
$dbname = "atj2";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>