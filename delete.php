<?php
include_once("config.php");
$select = mysqli_query($conn,"DELETE from users INNER JOIN user_accounts ON users.U_ID=user_accounts.U_ID WHERE  users.U_ID='".$_GET['del_id']."'") or die($select);;
header ("location: login.php");
?>