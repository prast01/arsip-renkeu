<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login E-Arsip</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</head>
   
<body>
    <div id="dots"></div>
    <div id="dots"></div>
    <div id="dots"></div>
    <div id="dots"></div>
<div id="form">
    <img src="img/login.png" height="" width="98%" style="left:25%">
    <div id="login">
    <div id="loginFields">
        </br>
    <form method="post" class="form-inline" role="form">
  <div class="">
    <input type="text" class="form-control input-lg" id="" name="username" placeholder="username">
  </div><br>
  <div class="">
    <input type="password" class="form-control input-lg" id="" name="password" placeholder="******">
  </div><br><p>
  <div class="">
    <input type="submit" class="btn btn-default btn-lg login" name="submit" value="LOGIN">
  </div>
        </div>
    </div>
</form>
</div>

</body>
<?php
include "koneksi.php";

$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$submit = isset($_POST['submit']) ? $_POST['submit'] : '';

if($submit){
$user = mysql_query("SELECT * from user where username='$username' and password='$password'") or die(mysql_error());
$tot = mysql_num_rows($user);
$r = mysql_fetch_array($user);
if ($tot > 0) { //jika data ada maka akan diproses
    $_SESSION['SESS_USERNAME']     = $r['username'];
    $_SESSION['SESS_PASSWORD']     = $r['password'];
    echo "<script> window.location='hal_admin.php'</script>";
} else {
?> <script> alert('Login Gagal !!!');   
        document.location="index.php";        
      </script> <?php
}
}
?>
    <style>
        body{
            background-image: url(https://photoshopgimptutorials.files.wordpress.com/2012/08/step-7.jpg);
        }
       
        #form{
            position: absolute;
            top:3%;
            height:500px;
            left:27%;
            width:44%;
            color:white;
            text-align: center;
        }
       
        #dots {
            position: absolute;

            top: 0;
            left: 0;
            right: 0;
            bottom: 0;

            background-image: url('http://www.uiueux.com/wp/flowfolio/wp-content/themes/flowfolio/img/bg_mask.png');
}
       
        #login{
            position: absolute;
            bottom:5px;
            left: 5%;
            width:100%;
            height:17%;
            border-radius: 7px;
        }
       
        .input-lg{
            border-color: #939393;
        }
       
        #loginFields{
            position: absolute;
            top:-207px;
            left:24px;
            width:90%;
            height:100%;
            background-color: ;
            border-radius: 7px;
        }
       
        #submission{
            position: absolute;
            top:25%;
            height:50%;
            width:10%;
            right:0%;
        }
       
        .login{
            border-top-left-radius: 6px;
            border-bottom-left-radius: 6px;
            background-color: orange;
            border-color: orange;
            color: white;
        }
       
        .login:Hover{
            background-color: #0080ff;
            border-color: #0080ff;
            color:White;
        }
       
        #copyright{
            position: absolute;
            bottom:2px;
            height:10%;
            left:0px;
            width:100%;
            text-align: center;
            color:white;

        }
       
    #copyright a{
        color:white;
        text-decoration: none;
    }
        #copyright a:hover{
            color:orange;
        }
       
        @media only screen and (max-width:1306px)
        {
            #form{
                width:50%;
                left:25%;
            }
        }
       
        @media only screen and (max-width:1152px)
        {
            #form{
                width:60%;
                left:20%;
            }
        }
       
        @media only screen and (max-width:974px)
        {
            #form{
                width:65%;
                left:17.5%;
            }
        }
       
        @media only screen and (max-width:901px)
        {
            #form{
                width:70%;
                left:15%;
            }
        }
       
       
        @media only screen and (max-width:837px)
        {
            #form{
                width:75%;
                left:12.5%;
            }
        }
       
        @media only screen and (max-width:783px)
        {
            #form{
                width:80%;
                left:10%;
            }
        }
       
        @media only screen and (max-width:765px)
        {
            #login{
                height:29%;
            }
           
            #submission{
                top:38%;
            }
           
            #form{
                left:25%;
                width:50%;
            }
           
            #loginFields{
                padding-right:15px;
                padding-left: 15px;
        }
           
        }
       
        @media only screen and (max-width:618px)
        {
            #form{
                width:60%;
                left:20%;
            }
        }
           
        @media only screen and (max-width:557px)
        {
            #form{
                width:70%;
                left:15%;
            }
        }
       
        @media only screen and (max-width:496px)
        {
            #form{
                width:80%;
                left:10%;
            }
        }
       
        @media only screen and (max-width:460px)
        {
            #form{
                left:3%;
            }
        }
       
    </style>
   
</html>