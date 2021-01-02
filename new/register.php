<?php




if ($_SERVER['REQUEST_METHOD'] == 'POST') {
#--------------------------------------------------



$username 		= $_POST['username'];
$password 		= $_POST['password'];
$email 			= $_POST['email'];
$hashpass 		= md5($password);


$passcheck = strlen($password);


		function create($u,$e,$p)//fun create and insert 
		{
			include 'connect.php'; 

	$sql = "INSERT INTO login /* query for insert */
			 (username ,email,password) values 
			 (?,?,?)";

			$stmt = $connect->prepare($sql);
			$stmt ->bindParam(1,$u,PDO::PARAM_STR); //handle data before insert
			$stmt ->bindParam(2,$e,PDO::PARAM_STR);
			$stmt ->bindParam(3,$p,PDO::PARAM_STR);
		
			$stmt -> execute();


		}
#-----------------------------------------------------------------		
	 //pass for function create
#-----------------------------------------------------------------	

#-----------------------------------------------------------------	
	function check($e){
			include 'connect.php'; // connect to database
			$user = $connect->prepare("SELECT count(*) as count ,email FROM login WHERE email='$e' LIMIT 1"); //query to limit only 1 result
  			$user->execute(); // execute qury

				while ($row = $user->fetch(PDO::FETCH_ASSOC)) { //fetsh data from database

 				$emailcount = $row['email']; // input data into array and pass to variable

   					 }

					    if ($emailcount == $e) {   // check if already register
					    	echo "email  already exists";
					}
							
#-------------------------------------------------------------------

			else{  //if not register will do this
				$user 		= $_POST['username'];
				$pass 		= $_POST['password'];
				
				$email 		= $_POST['email'];
				$pass = md5($pass);
				create($user,$email,$pass);
				echo ("<script>alert('your account has been created thanks for visit our website now login with your account')</script>");
			header("Refresh: 0;URL=1.php");
			}
	}
	

	
#--------------------------------------------------	

	if (!empty($email) and !empty($username) and !empty($password)) {
		if($passcheck < 8 ){ 	// check how many pass letter
			echo "password must be more than 8 pieces";
		}else{
			check($email);

		}
		
}else {
echo "all fields require";
}





}
else{
	echo "can\'t visit this page dir";
}
 

