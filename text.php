<?php

$hote = '127.0.0.1'; //server
$login = 'root';
$pass = '';
$namedb='app';
//disply comment and recipe liked that visitor
$pdo  = new PDO("mysql:host=$hote;dbname=$namedb", $login, $pass);

$stmt = $pdo->query("SELECT name, comment, liked FROM visitor");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo '<table border="1" >'."\n";
foreach ( $rows as $row ) {
echo "<tr><td>";
echo($row['name']);
echo("</td><td>");
echo($row['comment']);
echo("</td><td>");
echo($row['liked']);
echo("</td></tr>\n");
}
echo "</table>\n";
?>


<!DOCTYPE html>

<html>
<head>
    <title></title>
     <style>
    table , th,td{
        
     border: 1px double #3A5454;
     border-collapse: collapse;
     font-size: 20px;
    /* margin: 50px 50px;*/
     margin: auto;
     padding: 20px 10px 10px;
background: rgba(255, 247, 247, 0.2);
color: #3D5A5B;
    }
  th,td {padding: 60px 100px;}
 
  body{
   background-color: #748890;
          }
   </style>
</head>
<body>


</body>
</html>

