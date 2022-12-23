<?php
$id = $_GET['u_id'];
//echo ($id);
include('connectdb.php');
$query = "DELETE FROM user_table WHERE user_id='$id'";

if ($db->exec($query)) {
   echo "  delete user success .....";
    header("Location:index.php");
} else {
    echo "error in query ...";
}