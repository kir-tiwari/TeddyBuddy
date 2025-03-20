<?php

include "authguard.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            font-family:'Courier New', Courier, monospace;
            
        }
        #base{
            margin-top: 10px;
            margin-left: 100px;
            margin-right: 100px;
            align-items: center;
            background-color:bisque;
            
        }
        #big{
            text-align: center;
            color:rgb(118, 49, 49);;
        }
        #outbox{
            padding:10px;
            text-align: center;
            background-color: rgb(250, 229, 229);
            border-radius: 30px;
            border:solid;
            border-radius: 30px;
            border-color:rgb(118, 49, 49);
        }
        .head{
            color:rgb(118, 49, 49);
            
        }
        #inbox{
            background-color: rgb(197, 139, 113);
            display: flex;
            flex-direction: row;
            justify-content:space-evenly;
            font-size: 40px;
            border-radius: 30px;
            
            
        }
        .ipt{
            height:35px;
            border-radius: 30px;
            border-color:rgb(118, 49, 49) ;
            background-color: rgb(250, 229, 229);

        }
        
        .teddy{
            height: 200px;
            width: 200px;
        }
        .btn{
            color:rgb(250, 229, 229);
            background-color: rgb(118, 49, 49);
            border-radius: 30px;
            width:100%;
        height:30px;
        }
        .btn:hover{
            transform: scale(1.2);
        }
        .tb{
            border-radius: 15px;
            border-color:rgb(118, 49, 49) ;
            background-color: rgb(250, 229, 229);
            
        }
    </style>
</head>
<body id="base">
    <h1 style='text-align:center; color:rgb(118, 49, 49) '>~Teddy Beddy~</h1>
    <div id="big">
    <div id="outbox" >

    <h2>~Welcome to Seller Home ~</h2>
       
        <div id="inbox">
            <form action ="upload.php" method="post" enctype="multipart/form-data">
            <input type="text" placeholder="Product Name" name="name" class="ipt">
                <br>
                <input type="number" placeholder="Product Price" name="price" class="ipt">
                <br>
                <br>
                <textarea name="details" placeholder="  Discription..." cols="30" rows="5"  style="height: 100px"class="tb" ></textarea>

                <!-- Add confirm password logic in UI -->

                <!-- <select name="usertype"  class="ipt" >
                    <option value="Buyer">Buyer</option>
                    <option value="Seller">Seller</option> -->
                    
                
            <br>
            
            <input type="file" name="pdtimg"class="ipt" accept="jpg.png" >
            <br>
            <button class="btn">Upload</button>
        </div> 
    </div>
    <img src="teddy.png" class="teddy">
    <div>
    
    
</form>
</body>
</html>