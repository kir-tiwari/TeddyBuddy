<?php

// print_r($_POST);
// echo "<br>";
// print_r($_FILES);

session_start();
include "../shared/connection.php";
$source=$_FILES['pdtimg']['tmp_name'];
$target="../shared/images/".$_FILES['pdtimg']['name'];

move_uploaded_file($source,$target);

// $conn=new mysqli("localhost","root","","acme24_aug",3307);

//TASK : add aloggedin useridfor the owner feild ----> Done~

$sql_status=mysqli_query($conn,"insert into product(name,price,details,impath,owner) values('$_POST[name]',$_POST[price],'$_POST[details]','$target',$_SESSION[userid])");

if($sql_status){
    echo "Product Uploaded Successfully";
}
else{
    echo "Error in SQL".mysqli_error($conn);
}


?>