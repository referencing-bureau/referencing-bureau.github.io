<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User | Feedback</title>
    <meta name="viewport" content="width=device-width; initial-scale=1.0" lang='en' charset='utf-8'>
  <link rel="stylesheet" href="css/bootstrap.css">
<style media="screen">
.footer{background-color:rgb(68, 163, 172);
text-align:center;
font-size:13pt;
}
br{margin-bottom:5px;}
.form{
  margin-right:12px;
}
.col-md-5{
  font-size:13pt;
}
@media (max-width:512px)
{
  .footer{
    padding:10px;
    position:relative;
    margin:0px;
  }
  /*reduce crowding when the screen is small */
  .mobile-hide{
    display:none;
  }
}
textarea{
  resize:none;
  width:100%;
  height:250px;
  border:solid 1.5px rgb(9, 86, 124);
}
.btn{
  margin-bottom:20px;
}

</style>
  </head>
  <body>

<div class='container'>
  <div class='page-header'>
    <h1>User | Feedback</h1>
    <div class='btn btn-default'>
      <a href='login-user.php'>Log-in page</a>
    </div>

    <div class='btn btn-default'>
      <a href='dashboard.php'>User | Dashboard</a>
    </div>
  </div>
  <div class='row'>
 <div class='col-md-6 form'>
<form action='/' method="POST">
<textarea name='report' required></textarea>
<input type='submit' value='Leave feedback' class='btn btn-warning' />
</form>
</div>
<div class='col-md-5'>
  On this page you can leave your feed back or report problems in respect to the system or you can request a user name and password.
  <br>
  Whichever one you will want to do we will give you a quick response.
   <br>

  If your request is for a user name and password please leave the name of your institution in the space provided.
  <br>
  The feedback you provide will be used to improve the system
  <br>
  Thanks for your feed back
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
