<?php
$hote = '127.0.0.1'; //server
$login = 'root';
$pass = '';
$namedb='app';
//Display all contents of the BR table 
try {
$connection = new PDO("mysql:host=$hote;dbname=$namedb", $login, $pass);
$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$query= $connection->prepare("SELECT * from BR");
$query->execute();
$result= $query->fetchall();
Echo '<pre>';
Print_r($result);
Echo '</pre>';
}
CATCH(PDOEXCEPTION $e)
{echo 'echec in connection:' . $e->getMessage();
}

?>