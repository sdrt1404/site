<?php
  include "../Project/connect.php";

  $id=$_POST['id'];
  $date_of_order = $_POST['date_of_order'];
  $status_order=$_POST['status_order'];
  $id_client = $_POST['id_client'];
  $id_branch = $_POST['id_branch'];

  mysqli_query($connect, query: "UPDATE `orders` SET `date_of_order` = '$date_of_order', `status_order` = '$status_order', `id_branch` = '$id_branch', `id_client` = '$id_client' WHERE `orders`.`id` = '$id'");
  header ('Location:../hello_world/update.php');
?>