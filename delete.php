<?php

?>
<?php
require_once "auth/libs/rb.php";
require_once "auth/db.php";
require_once "auth/dbbag.php";
require_once "db.php";

    $conn = new mysqli("localhost", "root", "qwerty", "");
    
    $id = $_SESSION['logged_user']['id'];
    $res = mysqli_query($conn, "SELECT * FROM bag_user WHERE `id_user` LIKE '$id'");
    $row = mysqli_fetch_array($res);
    $conn = new mysqli("localhost", "root", "", "cwa");
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    $result = mysqli_query($conn, "DELETE FROM bag_user WHERE id='{$row['id']}'");
    
    $conn->close();

    header('Location: basket.php');

