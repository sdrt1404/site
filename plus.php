<?php 
require_once "auth\db.php";
$conn = new mysqli("localhost", "root", "qwerty", "client");
global $pdo;
$pdo = new \PDO(
    'mysql:host=localhost:3306;dbname=client;charset=UTF8',
    "root",
    "qwerty");
$id = $_SESSION['logged_user']['id'];

echo ("<br>");
if (empty($_POST['minus'])) exit("Поле не заполнено");
$res2 = $pdo->query("select * from bag_user where `id_user` like '$id';");
$imgs = [];
$img = $res2->fetch();

echo ("<br>");
$res = mysqli_query($conn, "SELECT * FROM bag_user WHERE `id_user` LIKE '$id' AND `name bike` LIKE '{$_POST['minus']}'");
$row = mysqli_fetch_array($res);
$resid = mysqli_query($conn, "SELECT id FROM bag_user WHERE `id_user` LIKE '$id' AND `name bike` LIKE '{$_POST['minus']}'");
$rowid = mysqli_fetch_array($resid);

echo ("<br>");

if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$nowq=$row['quantity'];
var_dump($row['quantity']);
$nowq1=$nowq+1;

$result = mysqli_query($conn, "UPDATE bag_user SET quantity='$nowq1' WHERE `name bike` LIKE '{$_POST['minus']}'");

$conn->close();
header('Location: basket.php');
