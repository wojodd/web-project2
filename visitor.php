<?php
// Change this to your connection info.
$DATABASE_HOST = '127.0.0.1';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'app';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if ( isset($_POST['name']) &&
isset($_POST['gender'])
/*&& isset($_POST['g'])*/) {
$sql = "INSERT INTO visitors (name,liked)
VALUES (:name,:liked)";
echo("<pre>\n".$sql."\n</pre>\n");
$stmt = $pdo->prepare($sql);
$stmt->execute($sql);
//(
//':name' => $_POST['name'],
//':liked' => $_POST['liked']));
}
?>