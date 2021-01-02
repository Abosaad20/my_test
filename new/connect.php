<?php



			$db   = "mysql:host=localhost;dbname=login";
			$user = 'root';
			$pass = '';

			$option = array(
				PDO::ATTR_CASE    => PDO::CASE_LOWER,
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
			);
#-----------------------------------------------------------------		
try {
	$connect = new PDO($db,$user,$pass,$option);  //connect database

		//echo "connect";	
	} catch (Exception $e) {
			echo $e->getmessage();
		}		
			
#-----------------------------------------------------------------	

?>