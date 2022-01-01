<?php
$hote = '127.0.0.1'; //server
$login = 'root';
$pass = '';
$namedb='app';
// disple all from table br عرض الوصفة وطريقتها
$pdo  = new PDO("mysql:host=$hote;dbname=$namedb", $login, $pass);

$stmt = $pdo->query("SELECT id , name_r, recipe FROM br");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo '<table border="1" >'."\n";
foreach ( $rows as $row ) {
echo "<tr><td>";
echo($row['id']);
echo("</td><td>");
echo($row['name_r']);
echo("</td><td>");
echo($row['recipe']);
//echo("</td><td>");

}
echo "</table>\n";
?>
<!DOCTYPE html>

<html>
<head>
    <title></title>
    <style>
    table , th,td{
        
     border: 1px double #033738;
     border-collapse: collapse;
     font-size: 20px;
     margin: 30px 50px;
     padding: 40px 10px 10px;
background: rgba(255, 255, 255, 0.2);
color: #033638;
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
