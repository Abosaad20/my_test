<?php

//-----------------------------------------

//TEST PAGE :D
// $file = fopen("file.txt", "r");
// while ($row = fgets($file)) {
// 	echo $row . "<br>";
// }

$HttpStatus = $_SERVER["REDIRECT_STATUS"] ;

  $url = "http://127.0.0.1/phpcourse/bla.php";
  // $proxy  '183.89.88.182:8080';

  $ch = curl_init();

  curl_setopt($ch, CURLOPT_URL, $url);
 // curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  curl_setopt($ch, CURLOPT_HEADER,1);
  // curl_setopt($ch, CURLOPT_PROXY, $proxy);
  // curl_setopt($ch, CURLOPT_POST, true);
  // curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,10);
  curl_exec($ch);
  	$result = curl_exec($ch);
    print_r($result)
$HttpStatus = $result;


  if($HttpStatus==200) {print "Document has been processed and sent to you.";}
  if($HttpStatus==400) {print "Bad HTTP request ";}
  if($HttpStatus==401) {print "Unauthorized - Iinvalid password";}
  if($HttpStatus==403) {print "Forbidden";}
  if($HttpStatus==500) {print "Internal Server Error";}
  if($HttpStatus==418) {print "I'm a teapot! - This is a real value, defined in 1998";}







// $p ='201.5.36.215:4145';
// $h = "User-Agent:Mozilla/5.0 (X11; Linux x86_64; rv:78.0) Gecko/20100101 Firefox/78.0";

// $file = fopen("file.txt", "r");
// while ($row = fgets($file)) {
// 	// echo $row . "<br>";
// 	$d=proxy($row);
// 	echo $d;
// }
// 
// echo $d;



/* 34.234.208.169:80
13.210.249.168:80
121.153.131.147:4145
109.122.81.9:57553
89.187.177.91:80




*/
// $url = "http://pubproxy.com/api/proxy";
// $proxy = "109.122.81.9:57553";

// $ch = curl_init();


// curl_setopt($ch, CURLOPT_URL, $url);
// curl_setopt($ch, CURLOPT_PROXY, $proxy);

// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// // curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);


// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

// // curl_setopt($ch, CURLOPT_HEADER, 1);

// $data = curl_exec($ch);

// echo  $data ;


// $d= str_replace('":', '",',$data);
// $d = explode(",", $d);
// $d = str_replace(array("{","[","]","}",'"'), "", $d);

// $d = implode(" : ", $d);
// if ($d[0] =="We have to temporarily stop you. You're requesting proxies a little too fast (2+ requests per second). Get your API to remove this limit at http://pubproxy.com/#premium") {
// 	# code...
// }
// if (file_exists($file)) {
// file_put_contents($file, $d[2]);
// }
// $d[2];

// echo $d;
// echo "<pre>";
// print_r($d);



























// include 'connect.php';

// $sql = "SELECT * from login WHERE username='ko'";
// $stmt = $connect->prepare($sql);
// $stmt-> execute();

// $row = $stmt ->fetch();

// echo $row['balance'];


// $user = 'asd';
// $card = 'asd';

// $sql = "UPDATE login SET balance = (select card_value from CARDS WHERE card_title = '$card') where username ='$user'";
// $stmt = $connect->prepare($sql);

// $stmt->execute();








//------------------------------------------

// include 'connect.php';

// $femail = $_POST['username'];

// echo $femail;
// $user = filter_var($femail,FILTER_SANITIZE_STRING)

// if(filter_var($femail,FILTER_SANITIZE_STRING) !== false){

// echo "bad";

// }else{
// 	echo "fat";
// }



// if (filter_var($femail,FILTER_VALIDATE_EMAIL) !== FALSE) {
// 	echo "good";
// }else{

// 	echo "bad";
// }



#====================calculate rows and columns =======================
// $sql = "SELECT * FROM login where username = :user"; //placeholder = :user
// $stmt = $connect->prepare($sql); //prepare data
// $stmt -> bindValue(':user','saad',PDO::PARAM_STR); // function to use place holder
// $stmt -> execute();

// echo $stmt->rowCount() . " users <br>"; // calculate how many username have 
// echo $stmt->columnCount() . " columns <br>"; // calculate how many username have 

#====================fetsh data like multi array =======================


// $sql="SELECT * FROM login ";


// $stmt = $connect->prepare($sql);
// $stmt -> execute();

// $row = $stmt->fetchall(PDO::FETCH_ASSOC);

// foreach ($row as $key => $value) {
// 	 echo  $value['username'] . "<br>";
// }

// echo "<pre>";
// print_r($row);
// echo"<pre>";


#====================fetsh data like array============================

// $sql="SELECT * FROM login LIMIT 1";


// $stmt = $connect->prepare($sql);
// $stmt -> execute();

// while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	
// 	echo "<pre>";
// 	 print_r($row);
// }
#==============================================================


//=======================fetsh data and check===================== 

// $e = 'henrytryoy@gmail.com';

// $errors = array(); 

// $user = $connect->prepare("SELECT count(*) as count ,email FROM login WHERE email='henrytryoy@gmail.com' LIMIT 1");

//   $user->execute();


// while ($row = $user->fetch(PDO::FETCH_ASSOC)) {

//  $emailcount = $row['email'];

//     }

 
//     if ($emailcount == $e) {
//     	echo "Username already exists";
// }

