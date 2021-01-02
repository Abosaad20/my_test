
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
     <script src="https://www.google.com/recaptcha/api.js"></script>
    <title>Document</title>
</head>
<body>
    <!----------------------Font Family-------------------->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@900&display=swap" rel="stylesheet">
<!-------------------------------------------------------->

<!------------div-Login---------->
<div class='box'>
  <h2>Login</h2>

 
  <form action="loginpage.php" method="POST">
 
       <!----user name------------->
       <input type="username" name="username" placeholder="username">
       <!----------password-->
       <input id='pw' name='password' placeholder='Password' type='password'>
       <!----------password-->
       <div class="g-recaptcha" data-sitekey="6Lcn7OIZAAAAAOr4WO_mCcY-4RAoesxvHi-d8yXo"></div> 
       <!--------Login------->
       <input  type='submit' name= "login" value='Login'>
       <div class="telegram">

      </div>
      <footer>
  </form>

  	<form method="post" action="registerpage.php" >
  		<input type="submit" name="key" value="Register">
  	</form>
    <p>by claw team new members &copy;</p>
  </footer>
</div>
</body>
</html>

