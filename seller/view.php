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

            .products{
                width:250px;
                height: 300px;
                display:inline-block;
                margin:10px;
                vertical-align:top;
                background-color:rgb(250, 229, 229);
                color:rgb(118, 49, 49);
                padding: 20px;
            }
            .img{
                width:100%;
                height:60%
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
</body>
</html>

<?php

include "authguard.php";
// echo "working";
include "../shared/connection.php";
$sql_result=mysqli_query($conn,"select*from product where owner=$_SESSION[userid]");
// $sql_result=mysqli_query($conn,"select*from product");

while($dbrow=mysqli_fetch_assoc($sql_result)){

echo "<div class='products'><div class='name'> $dbrow[name]</div><div class='price'> $dbrow[price]</div><img class='img' src='$dbrow[impath]'><div class='details'> $dbrow[details]</div></div>";
}
?>
<!-- IF YOU DONOT GO TO AUTHGUARD THEN THERE WILL BE A PAGE WITHOUT ANY Login
BUT THERE MUST BE A PAGE WITH LOGIN INFORMATIONS -->