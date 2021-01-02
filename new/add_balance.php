<?php

session_start();

$_SESSION['username'];

$user1 = $_SESSION['username'];

$card = $_POST['cardinfo'];

function add_balance($card,$username){

include "connect.php";

	$sql = "UPDATE login SET balance = (select (balance+card_value) from login,CARDS WHERE card_title = '$card' LIMIT 1) where username = '$username' ;
";
	$stmt = $connect->prepare($sql);

	$stmt->execute();

	echo "done";

}

add_balance($card , $user1);

