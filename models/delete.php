<?php
require_once '../config/connect.php';
$bid_id = $_GET['id'];
$updated_data = mysqli_query($connect, "DELETE FROM `bid_list` WHERE bid_id = '$bid_id'");

header('Location: ../index.php');
?>