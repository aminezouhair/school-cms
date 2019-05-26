<?php 

session_start();
//error_reporting(0);

$chost  = "localhost";    // Nom server
$cuser  = "root";         // Username server
$cpass  = "";             // Mot de pass server
$cdb    = "ecoledb";      // nom database


//conection server > database
$con = new mysqli($chost, $cuser, $cpass, $cdb);
// check connection
if ($con->connect_error) 
	{ 
		echo "error connection db"; 
     } 

//////


?>


<!-- $username = $_POST['username'];
$pass     = md5($_POST['password']);



$res = $con->QUERY ("SELECT * FROM users WHERE username = '$username' AND password = '$pass' ");
$row = $res->fetch_array(MYSQLI_ASSOC);

if ($res->num_rows > 0 )
{
	session_start();
	$_SESSION['id']   = $row['id'];
	$_SESSION['nama'] = $row['nama'];
	header('location: admin/idmin.php');
} else {
	header('location:login.php');
	echo('Not Correcte!');
}
 -->








