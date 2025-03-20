<?php

$hostname="localhost";
$user="root";
$password="";
$dbname="acme24_aug";
$port=3307;

$conn=new mysqli($hostname,$user,$password,$dbname,$port);

// print_r($conn);
// echo "<br><br> Connection Success";


// How to check Whether a connection is working or not 
// 1.setQuery
// 2.insetQuery


// mysqli_query($conn,"insert into student(name) values('Prachi')");

$sql_result=mysqli_query($conn,"select * from student");
print_r($sql_result);

$dbrows=mysqli_fetch_assoc($sql_result);
print_r($dbrows);

while($dbrow=mysqli_fetch_assoc($sql_result)){
    echo"<br>";
    print_r($dbrow);


}


?>