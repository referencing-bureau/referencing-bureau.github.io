<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User | Login</title>
    <meta name="viewport" content="width=device-width; initial-scale=1.0" lang='en' charset='utf-8'>

  <link rel="stylesheet" href="css/bootstrap.css">
  <style >
  a{
    font-style:italic;
  }
    .form-control{
      width:100%;
    }
    .btn {
      margin:10px;
    }
    .pic{
      background-image:url('pics/unity.jpg');
      width:100%;
      height:100%;
    }
    .about{
      margin-left:30px;
      font-size:13pt;
    }
    label{
      font-size:13pt;
      font-weight:lighter;
    }
    .glyphicon{
      color:rgb(7, 141, 154);
    }
    .footer{background-color:rgb(68, 163, 172);
    text-align:center;
    font-size:13pt;
    }
    @media (max-width:512px)
    {
      .footer{
        padding:10px;

      }
      /*reduce crowding when the screen is small */
      .mobile-hide{
        display:none;
      }
    }
  </style>
  </head>
  <body>

<div class='container'>
  <div class='page-header'>
    <h1>User | Login</h1>
  </div>
<div class='row'>

  <div class='col-md-12'>
    <div class='col-md-5'>
<form class='form' action='/' method='POST'>
  <label><span class='glyphicon glyphicon-user'></span>User name  </label>
<input class='form-control' name='usr_name' type='text' required/>
<label><span class='glyphicon glyphicon-lock'></span>Password</label>
<input class='form-control' name='password' type='password' required />
<button class='btn btn-primary ' type='submit' ><span class='glyphicon glyphicon-log-in'> </span>  Log-in</button>
</form>
</div>
<div class='col-md-5 about'>
Please type in the user name and password provided by the site administrator.
<li>If you do not have a password and username or you have forgotten your password please <a href='contact.php'>contact </a> the site administrator</li>
<li>You can check your email to see when you last logged in.</li>
<li>Please leave your feedback about the system on our <a href='feedback.php'>feed back page</a>.This will help the site developers to improve the system.</li>
</div>

</div>
</div>

</div>
<script type="text/javascript" src='js/jquery.js'>

</script>
<div class=' nav  navbar-fixed-bottom footer col-md-12'>
  Copyright &copy
<?php
date_default_timezone_set('UTC');
echo date('Y');?>
   <div class='mobile-hide'>
   Student Admission Referencing Bureau
   <br>A project By :
  Philip Ansah  &amp Ardayfio Emmanuel .

  </div>
  <a href='contact.php ' class='btn btn-success'>Contact us</a>
</div>

  </body>
</html>
