<?php
$DATABASE_HOST = '127.0.0.1';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'app';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
// To save the comment and the recipe that liked the visitor in the database
@$a=$_POST['name'];
@$b=$_POST['comment'];  
@$c=$_POST['gender'];
@$d=$_POST['one'];  
@$f=$_POST['two'];

if(@$_POST['submit'])  
{  
echo $s="insert into visitor (name,comment,liked,one,two) values('$a','$b','$c','$d','$f')";  
echo '<script type="text/javascript"> alert("Data Inserted")</script>';
mysqli_query($con,$s);  
}
?>
<?php
$DATABASE_HOST = '127.0.0.1';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'app';
$con1 = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if(@$_POST['u'])  // عند الضغط على زر التشغيل سيتم وضع قيمة 1 في الداتابيس بدلا من 0
{  
 $s1="INSERT INTO visitor (up)
VALUES ('u')";
echo '<script type="text/javascript"> alert("Data Inserted")</script>';
mysqli_query($con1,$s1);  
}

?>
