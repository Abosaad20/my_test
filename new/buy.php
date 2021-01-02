 <?php
session_start();


$_SESSION['id']; //got session from login page
$id_user=$_SESSION['id']; //give it to variable

function orders($id){ //function to add order to database by session

#--------------------Query to create in datebase-----------------------
// create table orders(
// id INT not null auto_increment primary key,
// order_date timestamp,
// amount DECIMAL(8,2),                
// user_id INT,
// FOREIGN KEY (user_id) REFERENCES login(id));
#-------------------------------------------------------

include 'connect.php'; // connect to database

$sql = "INSERT INTO orders(amount,user_id) values(81.60,$id)";

$connect->exec($sql);

echo "Done you buy it";
header('REFRESH:3;URL=market.php');
}
orders($id_user); // pass id to function 