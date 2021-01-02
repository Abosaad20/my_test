
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
     
    <title>Register Page</title>
</head>
<body>
    <!----------------------Font Family-------------------->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@900&display=swap" rel="stylesheet">
<!-------------------------------------------------------->

<!------------div-Login---------->
<div class='box'>
  <h2>Login</h2>

 
  <form action="register.php" method="POST">
       
       <input id='user' name='username' placeholder='username' type='username' pattern='[a-zA-Z0-9]+' required>
       <!----------password-->
       <input id='pw' name='password' placeholder='Password' type='password'>
       <!----------password-->
       <input type="email" name="email" placeholder="email" >
       <!--------Login------->
       <input  type='submit' name= "login" value='Register'>
       
      <footer>
  </form>
  <form method="POST" action="1.php">
    <input type="submit" name="submit" value="Login Page">
  </form>

  
    <p>by claw team new members &copy;</p>
  </footer>
</div>
</body>
</html>

