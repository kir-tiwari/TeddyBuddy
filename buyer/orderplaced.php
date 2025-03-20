<?php


include "authguard.php";
include "../shared/connection.php";

$sql_result=mysqli_query($conn,"select*from cart join product on product.pid=cart.pid where userid=$_SESSION[userid]");

$total=0;

$dbrow=mysqli_fetch_assoc($sql_result);
    



echo "<head>
   <style>
    *{
        font-family:'Courier New', Courier, monospace;
        
    }
    .head{
        color:rgb(118, 49, 49);
        font-size: 40px;
        
    }
    .out{
        text-align: center;
    }
    .btn{
            color:rgb(250, 229, 229);
            background-color: rgb(118, 49, 49);
            border-radius: 30px;
            font-size: 20px;
            
        }
        .btn:hover{
            transform: scale(1.2);
        }
    .para{
        color:rgb(118, 49, 49);
        font-size: 20px;
    }
   </style>
</head>
<body style='text-align: center;'>
    <div class='out'>
        <h1 class='head'>Your Order is Placed! ~</h1>
        <p class='para'><b>Total Rs. $dbrow[price]</b></p>
        <p class='para'>Press the button to continue ^_^</p>
        <br>
        <br>
        <a href='home.php'><a href='deletecart.php?cartid=$dbrow[cartid]'><button class='btn'>Continue Shopping</button></a></a>
    </div>
</body>
</html>";
?>