<?php

	
	$init = curl_init();

	$email = 'henrytryoy@gmail.com';

	$Password = '0193081473';
	$UserToken='c1HIm12-TAykBKSUMHqsvj%3AAPA91bER8ssWinQkUi7r0bmtW0TtKawW8uzxWrzmBXtbaeRy0ixu0RnJ7G_sVu3CrRHK9EPsFebhGZ84Zikdd5mFO_OMTH7mGM3R-8JYtryLgOOJkKDfwBYAUsveNiZy_I3arrbYWt-n';
	

	curl_setopt($init, CURLOPT_RETURNTRANSFER, true); 
	curl_setopt($init, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($init, CURLOPT_POST, 1);
	curl_setopt($init,  CURLOPT_URL, "https://fisms.com/api/EmailLogIn?&Email=$email&UserToken=$UserToken&Device=Android&Password=$Password");

	#----------------------------------------------------------------------------	

	$resualt = curl_exec($init);
		curl_exec($init);

		echo "<pre>";
		print_r($resualt);
		echo "<pre>";
// $url="https://services.orange.eg/SignIn.svc";
// $user_pwd = '01229848640'.':'.'34pntqda';


//  function post($url , $user_pwd) {
//       $ch = curl_init($url);
//       curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//       curl_setopt($ch, CURLOPT_USERPWD, $user_pwd);
//       curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_DIGEST);
//       curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json; charset=UTF-8") );
//       $response =curl_exec($ch);
//       return $response;}

// echo "<pre>";
//  print_r(post($url,$user_pwd));
//  echo "<pre>";     

//   $ch = curl_init("https://services.orange.eg/SignIn.svc/SignInUser");
//       curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//       curl_setopt($ch, CURLOPT_USERPWD,'[01229848640]:[34pntqda]');
//       curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_DIGEST);
//       curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json; charset=UTF-8") );
//       $response =curl_exec($ch);


// echo "<pre>";
//  print_r($response);
//  echo "<pre>";  