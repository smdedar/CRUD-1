<?php
include_once('Connect.php');
$id=$_REQUEST['id'];

$query=("DELETE FROM `test1` WHERE id=$id");
mysqli_query($connect,$query);

header('location:Display.php');

?>