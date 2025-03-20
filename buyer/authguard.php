<!DOCTYPE html>
<head>
   <style>
   

    .boxout{
        border:solid;
        color: rgb(118, 49, 49);;
        background-color: rgb(250, 229, 229);;
        display:flex;
        justify-content:space-evenly;
        border-radius: 40px;
        height: 5%;
        width:fit-content;
        font-size:26px;
        padding:5px;
        
    }
   </style>
</head>
<body background-color;bisque>
    
</body>
</html>
<?php
session_start();

// GUESS THE SECURITY LOOPHOLE

if(isset($_SESSION['login_status'])==NULL){
    echo "You Skiped the Login...";
    echo "<br><a href='../shared/login.html'>Login Here...</a>";
    die;
}


if($_SESSION['login_status']==false){
    echo "Unautharized Attempt";
    echo "<br><a href='../shared/login.html'>Login Here...</a>";
    die;
}

echo "<DIV CLASS='BB'><div class='boxout'><div class='boxin' style='font-size:15px;padding:10px'>$_SESSION[usertype]</div><div class='boxin' style='font-weight: bold;'>$_SESSION[username]</div></div></DIV>";

?>