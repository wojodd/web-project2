<?php
// connection
session_start();
$DATABASE_HOST = '127.0.0.1';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'app';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

//  check if the data from the login  isset() 
if ( !isset($_POST['UserName'], $_POST['password']) ) {
	
	exit('Please fill both the username and password fields!');
    
}

// query
if ($stmt = $con->prepare('SELECT id, Password FROM login WHERE UserName = ?')) {
	// ربط المتغيرات
	$stmt->bind_param('s', $_POST['UserName']);
	$stmt->execute();
	// Store the result , check if the account exists in the database.
	$stmt->store_result();

if ($stmt->num_rows > 0) {
	$stmt->bind_result($id, $password);
	$stmt->fetch();
	// Account exists, now we verify the password.
	// Note: remember to use password_hash in your registration file to store the hashed passwords.
	if ($_POST['password'] === $password) {
		// Verification success! User has loggedin!
		// Create sessions know the user is logged in, they basically act like cookies but remember the data on the server.
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $_POST['UserName'];
		$_SESSION['id'] = $id;
		header('Location: home.php');
	} else {
		// Incorrect password
		//echo 'Incorrect username pass and/or password!';
        header('Location: login.php');
		
	}
} else {
	// Incorrect username
	echo 'Incorrect username user and/or password!';
}
	$stmt->close();
}


?>
