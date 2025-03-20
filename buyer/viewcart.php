<html>
    <head>
        <style>
             *{
            font-family:'Courier New', Courier, monospace;
            
        }
        body{
            margin-top: 50px;
            background-color:beige;
        }
        .head{
            text-align: center;
            color:rgb(118, 49, 49);
            

            
        }
        .maj{
            border: solid;
            border-color: rgb(118, 49, 49);
            background-color: rgb(197, 139, 113);
        }

        .products{
                width:200px;
                height: 360px;
                display:inline-block;
                margin:11px;
                vertical-align:top;
                background-color:rgb(250, 229, 229);
                color:rgb(118, 49, 49);
                padding: 20px;
                border:1px rgb(118, 49, 49) solid;
                border-radius: 6px;
            }
            .products:hover{
                transform: scale(1.04);
            }
            .img{
                width:100%;
                height:62%
            }
            .name{
                font-size:24px;
                font-weight: bold;
            }
            .price{
                font-size:25px;
                color:rgb(235, 48, 173);
            }
            .price::before{
                content:" Rs. ";
                font-size:20px;
                
            }
            </style>
</head>
<body>
    <H1 class="head">~Teddy Buddy~</H1>

    <br>
    <DIV style="text-align:center">
    <h2 STYLE="COLOR:rgb(118, 49, 49) ">~ MY CART ~</h2>
    </DIV>
</body>
</html>

<?php
include "authguard.php";
echo"<br>";
include "menu.html";

include "../shared/connection.php";

$sql_result=mysqli_query($conn,"select*from cart join product on product.pid=cart.pid where userid=$_SESSION[userid]");

$total=0;


while($dbrow=mysqli_fetch_assoc($sql_result)){
    
echo "<div class='products'>
<div class='name'> $dbrow[name]</div>
<div class='price'> $dbrow[price]</div>
<img class='img' src='$dbrow[impath]'>
<div class='details'> $dbrow[details]</div>
<a href='deletecart.php?cartid=$dbrow[cartid]'><button class='btn'>Remove</button></a>
<a href='orderplaced.php?pid=$dbrow[pid]&price=$dbrow[price]'><button class='btn'>Buy Now</button></a></div>";}




?>