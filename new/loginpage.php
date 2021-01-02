
<?php
session_start();

if ($_SERVER['REQUEST_METHOD']== 'POST') {

$username = $_POST['username']; // pass post to variable
$_SESSION['username'] = $username; //start session from login page
$user1 = $_SESSION['username']; //pass session to variable to pass it to function

$password = $_POST['password'];
$password = md5($password); // hash password to == real password





function check($e, $p) //function to check user and pass
{
	include 'connect.php';

$stmt = $connect->prepare("SELECT COUNT(*) AS count FROM login WHERE username='$e' and password='$p'"); 


$stmt->execute(array($e, $p));
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { // pass $stmt to row to do array
  $username_count = $row["count"];
}
if ($username_count > 0) {
  






  function data($mailss)
{
include 'connect.php';

$sql = "SELECT * FROM login WHERE username=?";
$query = $connect->prepare($sql);
$query->execute(array($mailss));
$results = $query->fetchAll( PDO::FETCH_ASSOC );        
$user=$results[0]["username"];


$idnum=$results[0]["id"];
$_SESSION['id'] = $idnum;

echo ("<script>alert('hi $user your id is $idnum and thank you for visit claw website')</script>");
header("Refresh: 0;URL=dash.php");
}
data($e);



}else{
  echo "<script>alert('username or password is wrong')</script>";
  header("Refresh: 0;URL=1.php");
}
}
check($user1, $password);

}else{
	echo "<script>alert('you cannot visit this page dirictly')</script>";
	header("Refresh: 0;URL=../a.php");
}
