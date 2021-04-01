<?php
$id = $_GET['id'];
$connect = mysqli_connect("localhost", "root", "", "crud");
$sql = "Delete  From member WHERE id = '$id' ";
$result = mysqli_query($connect, $sql);
header('location: read.php');
