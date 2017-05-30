<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <meta name="viewport" content="width=device-width; initial-scale=1.0" lang='en' charset='utf-8'>
  <link rel="stylesheet" href="css/bootstrap.css">
<style media="screen">
.footer{background-color:rgb(68, 163, 172);
text-align:center;
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

.panel-heading{
  font-size:14pt;
}
.panel-content{
  padding-left:10px;
  font-size:13pt;
  padding-top:10px;
}
li{
  list-style-type:none;
  margin-bottom:10px;
}
</style>
  </head>
  <body>
<div class='container'>
<div class='page-header'>
<h1>Contact us</h1>
<div class='btn btn-default'>
  <a href='login-user.php'>Log-in page</a>
</div>

<div class='btn btn-default'>
  <a href='dashboard.php'>User | Dashboard</a>
</div>
</div>
<div class='col-md-12'>
  <div class='panel panel-primary'>
  <div class='panel-heading'>
    You can contact us on :
  </div>
  <div class='panel-content'>
    <li><img class=''  src='pics/g.svg' width='50px' height='50px' /> SARB@gmail.com</li>
    <li><img class=''  src='pics/f.svg' width='50px' height='50px' /> SARBGh</li>
    <li><img class=''  src='pics/w.svg' width='50px' height='50px' />
      0277359229
      0548321213
      <li>
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
