<?php


include "connection.php";

mysqli_query($conn,"insert into user(username,password,usertype) values('$_POST[username]','$_POST[password]','$_POST[usertype]')");

header("location:goback.html")

?>