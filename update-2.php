<?php
include 'connectdb.php';
$name=$_POST['name'];
$email = $_POST['email'];
$id = $_GET['u_id'];


$query = "UPDATE user_table SET user_name = '$name', user_email = '$email' WHERE user_id = '$id';";


if ($db->exec($query)) {
    header("Location:index.php");
   //     echo "Successfully Insert Records";
} else {
    echo "error with the query";
}
//echo $name;
//echo $email;
//echo $id;
//$query = "INSERT INTO user_table(user_name, user_email) VALUES( '$name', '$email')";
?>