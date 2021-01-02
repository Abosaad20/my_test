<?php
session_start();
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$_SESSION['id'];
$_SESSION['username']; // register session from login page
$user1 = $_SESSION['username']; // give to varriable to set it in fun

$pass1 		= $_POST['newpassword'];
$pass2 		= $_POST['newpassword2'];

	function create($newpass,$username)//fun create and insert 
		{
			include 'connect.php'; //connect to database


	$query = $connect ->prepare("UPDATE login SET password ='$newpass' WHERE username = '$username' "); 
		$query ->execute();
		echo "Updated";
		header("REFRESH:1;URL=dash.php") ;

		}
if (!empty($pass1 and $pass2)) {
		if ($pass1 == $pass2) {
			$pass1 = md5($pass1); // hash password before pass to function
			create($pass1,$user1);
		}else{
			echo ("<script>alert('please tybe password') </script>");
			header("Location:updatepass.php");
		}
}
else{
		echo ("<script>alert('please fill ')</script>"). header("REFRESH:1;Location:dash.php");
		
	}



	// function check($e){
	// 		$db   = "mysql:host=localhost;dbname=login";
	// 		$user = 'root';
	// 		$pass = '';			
	// 		$option = array(
	// 			PDO::ATTR_CASE    => PDO::CASE_LOWER,
	// 			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);		
	// 		$connect = new PDO($db,$user,$pass);
	// 		$sql = $connect -> prepare("SELECT COUNT(email) AS count FROM login");
	// 		$sql -> execute(array($e)); //change column to array
	// 		while ($row = $sql->fetch(PDO::FETCH_ASSOC)) { //loop for check
	// 		  $email_count = $row["count"]; //give 
	// 		}

	// 		if ($email_count > 0) {
	// 			echo "allready register";
	// 			header("REFRESH:5 ,URL = registerpage.php");
	// 		}else{
	// 			if ($pass1 == $pass2) {
	// 				create($pass1,$user);}
	// 			else{
	// 				echo "please enter right passwrod";
	// 				header("REFRESH:2;URL=updatepass.php");
	// 			}
				
	// 		header("Refresh: 0;URL=../updatepass.php");
	// 		}
	// }
// 	// check($pass);
}

#----------------------------------------------------------
else{
	echo "can't visit this page dir";
}
 

