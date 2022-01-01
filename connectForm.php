<?php
 

$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($username);
$password = mysqli_real_escape_string($password);

$hote = '127.0.0.1';
$login = 'root';
$pass = '';
$dbname = 'app'; // Name of the database
$bdd = mysqli_connect($hote, $login, $pass, $dbname);

$result = mysqli_query("select * from login where UserName=$uname , Password=$password")
or die("Failed to query database ".mysqli_error());
$row = mysqli_fetch_array($result);
if ($row['UserName'] == $username && $row['password'] == $password){
    echo "login success welcom ";
}
else{
    echo"failed to login";
}








?>