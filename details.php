<?php
session_start();

if (isset($_POST['clothes'])){
  $_SESSION['clothes']=$_POST['clothes'];
}
else{
 $_SESSION['clothes']=0;
}
$_SESSION['ci']=$_POST['ci'];
$_SESSION['quantity']=$_POST['quantity'];
$_SESSION['size']=$_POST['size'];
$_SESSION['color']=$_POST['color'];
?>
<!doctype HTML>
<html>
<head>
 <title>Shipping Information</title>
 <style>
 *{
  font-family:sans-serif;
}
body{
margin:0;
font-family:sans-serif;
}
.brand-title{
  display:inline-block;
  font-size:1.7rem;
}

nav{
  background-color:#e3e7f1;
  padding-left:2.5%;
  position:fixed;
  opacity:0.9;
  width:100%;
  z-index:2;
}
.options{
 border-radius:15px;
 position:relative;
 top:100px;
 background-color:#e3e7f1;
 margin:2%;
 margin-top:0;
 padding:3%;
 padding-left:5%;
}
.options p{
 margin-bottom:5px;
}
input[type='text'],input[type='email']{
 border-radius:5px;
 width:20%;
 height:30px;
 background:#fafafa;
}
input[type='submit']{
  border-radius:12px;
  width:200px;
  height:50px;
  background-color:#010101;
  border:2px solid #3c4245;
  font-size:1.3rem;
  color:white;
}
input[type='submit']:hover{
  transition:0.5s;
font-size:1.1rem;
  background-color:transparent;
  box-shadow:0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
  color:black;
}
</style>
 <meta charset='UTF-8'>
</head>
<body>
  <nav>
    
    <h2 class='brand-title'>Cloth Factory</h2>
  </nav>
  <div class='options' >
  <form action='invoice.php' method='post'>
  <p style='margin:0;font-size:2rem;background-color:#010101;color:white;border-radius:15px;padding:2%;text-align:center;'>Enter your Shipping Information</p><br><br>
  <p style='font-size:1.3rem;display:inline-block;margin-right:16.5%;'>First Name<sup><font color='red'>*</font></sup></p>
  <p style='font-size:1.3rem;display:inline-block;'  >Last Name<sup><font color='red'>*</font></sup></p><br>
  <input type='text' name='first' style='margin-right:5%;' required >
  <input type='text' name='last'  required>
  <p style='font-size:1.5rem;margin-top:3%;'>Street Address<sup><font color='red'>*</font></sup></p>
  <input type='text' required name='street-address' style='width:46%;'>
  <p style='font-size:1.5rem;margin-top:3%;'>Address Line 2</p>
  <input type='text' name='street-address1' style='width:46%;'><br>
  <p style='font-size:1.5rem;margin-top:3%;margin-right:14.5%;display:inline-block;'>State<sup><font color='red'>*</font></sup></p>
  <p style='font-size:1.5rem;margin-top:3%;display:inline-block;'>City<sup><font color='red'>*</font></sup></p><br>
  <input type='text' name='state' style='margin-right:4.5%; width:15%;' required >
  <input type='text' name='city'  required style='width:25.5%;'><br>
  <p style='font-size:1.5rem;margin-top:3%;margin-right:6%;display:inline-block;'>Zip Code<sup><font color='red'>*</font></sup></p>
  <p style='font-size:1.5rem;margin-top:3%;display:inline-block;'>Phone Number<sup><font color='red'>*</font></sup></p><br>
  <input type='text' name='zipcode' style='margin-right:4.5%; width:10%;' required >
  <input type='text' name='phno'  required style='width:30.7%;'><br>
  <p style='font-size:1.5rem;margin-top:3%;display:inline-block;'>Email Address<sup><font color='red'>*</font></sup></p><br>
  <input type='email' name='email' required style='width:46%;'><br>
  <div style='background-color:#fafdcb;margin-top:3%;display:inline-block;padding:2%;'>
   <p style='font-size:1.5rem;display:inline-block;margin-top:0;'>Shipping<sup><font color='red'>*</font></sup></p><br><br>
   <input type='radio' name='ship' value='200' required>&nbsp;Express (Rs.200)<br><br>
   <input type='radio' name='ship' value='50' required>&nbsp;Standard (Rs.50)
  </div>
  <center><input type='submit' value='Next'></center>
  </form>
  </div>
</body>
</html>
