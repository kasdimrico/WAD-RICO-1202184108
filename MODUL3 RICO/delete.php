<?php

include ('config.php');
$id = $_GET['id'];
$query = "DELETE FROM event_table WHERE id='$id'";
$delete = mysqli_query($conn, $query);
header("location:Home.php");

?>