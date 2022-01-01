<?php
//
//
//$hote = '127.0.0.1';
//$login = 'root';
//$pass = '';
//$dbname = 'app'; // Name of the database
//$bdd = mysqli_connect($hote, $login, $pass, $dbname);
//
//if(isset($_POST['join'])){
//$username = $_POST['UserName'];
//$password = $_POST['password'];
//$sql=mysqli_query("select Password from login where UserName='$username'");
//if ($row=mysqli_fetch_array($sql)){
//  if($password==$row['password']){
//    header("location:home.html");
//    exit();
//  }
//  else{
//    echo 'invalid';
//  }
//}
//
//  
// 
//}
//echo 'success in connecting to database';
//if (!$bdd) {
//echo 'Erreur de connection (' . mysqli_connect_errno() . ') ' .
//mysqli_connect_error();
//}
//..
// $uname=$_POST['UserName'];
//$password=$_POST['password'];
//
//$username = stripcslashes($username);
//$password = stripcslashes($password);
//$username = mysqli_real_escape_string($username);
//$password = mysqli_real_escape_string($password);
//
//$hote = '127.0.0.1'; //server
//$login = 'root';
//$pass = '';
//$namedb = 'app'; // Name of the database
////Try{
//$connection = new PDO("mysql:host=$hote;dbname=$namedb", $login, $pass);
//$result = mysqli_query("select * from login where  UserName = '$username' and Password = '$password'")
//or die("Failed to query database " .mysqli_error());
//$row = mysqli_fetch_array($result);
//if ($row['UserName'] == $username && $row['password'] == $password){
//    echo "login success welcom ";
//}
//else{
//    echo"failed to login";
//}
//..
//if(isset($_POST['join'])){
// 
//  $query= $connection->prepare("select * from login where UserName=$uname , Password=$password limit 1");
//  $query->bindParam("ss",$uname,$password);
//  $query->execute();
//  $result=mysqli_query($query);
//  if(mysqli_num_rows($result)==1){
//    echo'welcom'; 
//  } else {
//    echo'no';
//  }
//$query->execute();
//
//$result=mysqli_query($query);
//if(mysqli_num_rows($result)==1){
//echo'connect';
//exit();
//}
//else {
//echo'not connect';
//exit();

// set the PDO error mode to exception
//$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//echo 'success in connecting to database';
//}
//CATCH(PDOEXCEPTION $e)
//{echo 'echec in connection:' . $e->getMessage();
//}


//
//$host='127.0.0.1';
//$user='root';
//$password='';
//$db='app';
//mysqli_connect($host,$user,$password);
//mysqli_select_db($db);
//
//
//
//if(isset($_POST['UserName'])){
//$uname=$_POST['UserName'];
//$password=$_POST['password'];
//
//$sql="select * login where UserName+'".$uname."'AND password='".$password."'limit 1";
//$result=mysqli_query($sql);
//if(mysqli_num_rows($result)==1){
//echo"connect";
//exit();
//}
//else {
//echo"not connect";
//exit();
//}
//}



?>

<!DOCTYPE html>

<html>
<head>
    <title></title>
    <link rel= "stylesheet" href="Style1.css"/>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
  <div class="bac-img">
 <img src="pexels-ella-olsson-1640774 copy.jpg" width="1488" >
</div>
<div class="signupSection">
  <div class="info">
   
    <img src="logo12.png" width="150" position="center">
  
    <i class="icon ion-ios-ionic-outline" aria-hidden="true"></i>
    
    
  </div>
  
  <form action="formcon.php" method="POST" class="signupForm" name="signupform">
    <h2>LogIn</h2>
    <ul class="noBullet">
     <!-- <li>
        <label for="username"></label>
        <input type="text" class="inputFields" id="username" name="username" placeholder="Username" value="" oninput="return userNameValidation(this.value)" required/>
      </li>-->
     <li>
        <label for="username"></label>
        <input type="text" class="inputFields" id="username" name="UserName" placeholder="UserName" value="" required/>
      </li>
     
      <li>
        <label for="password"></label>
        <input type="password" class="inputFields" id="password" name="password" placeholder="Password" value="" oninput="return passwordValidation(this.value)" required/>
      </li>
      
      
      <li id="center-btn">
        
        <input type="submit" id="join-btn" name="join" alt="Join" value="Join">
      </li>
      <br><br>
     <!-- dont have an account? <a href=signup.html>Sign Up</a>-->
    </ul>
  </form>
</div>
  </div>
</body>
</html>
