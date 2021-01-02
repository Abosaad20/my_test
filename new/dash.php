<?php
session_start();
echo $_SESSION['username'];

?>


<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
     <script src="https://www.google.com/recaptcha/api.js"></script>
    <title>DashBoard</title>
</head>
<body>
    <!----------------------Font Family-------------------->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@900&display=swap" rel="stylesheet">
<!-------------------------------------------------------->
 <img src="">

<!------------div-Login---------->
    <div class='topnav'>
     <h2>Update</h2>
     <!--------add balance------->
             <!--------update passs------->
          <a class="active" href="dash.php">Home </a>
        
          <a  href="updatepass.php">update password </a>

          <a href="add_balancepage.php"> add balance </a>

          <a href="logout.php">logout </a>
    </div> 
<!------------------------------------>


</body>
</html>

