<?php
session_start();
$fname=$_POST['first'];
$lname=$_POST['last'];
$add=$_POST['street-address'];
if(isset($_POST['street-address1'])){
  $add1=$_POST['street-address1'];
}
else{
  $add1="";
}
$state=$_POST['state'];
$city=$_POST['city'];
$zip=$_POST['zipcode'];
$phno=$_POST['phno'];
$email=$_POST['email'];
$ship=$_POST['ship'];
if (count($_SESSION['clothes'])===2){
  $cost=$_SESSION['quantity']*(599+1299);
}
else if($_SESSION['clothes']==='T-Shirt - Rs.599'){
  $cost=$_SESSION['quantity']*599;
  $clo=$_SESSION['clothes'][0];
}
else{
 $cost=$_SESSION['quantity']*1299;
 $clo=$_SESSION['clothes'][0];
}
if($ship==='50'){
 $ss="Standard (Rs.50)";
}
else{
 $ss="Express (Rs.200)";
}
$fcost=$cost+$ship;
if(count($_SESSION['clothes'])==0){
 $fcost=0;
}
?>
<!doctype HTML>
<html>
<head>
<title>Order Summary</title>
<meta charset='UTF-8'>
<style>
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
*{
  font-family:sans-serif;
}
body{
margin:0;
font-family:sans-serif;
}
td{
 border-bottom:1px solid;
}
.brand-title{
  display:inline-block;
  font-size:1.7rem;
}
.logo{
  height:50px;
  width:50px;
  position:relative;
  top:12px;
  margin-right:0.7%;
}
nav{
  background-color:#e3e7f1;
  padding-left:2.5%;
  position:fixed;
  opacity:0.9;
  width:100%;
  z-index:2;
}

p{
font-size:1.5rem;
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
</head>
<body>
  <nav>
    <img class = 'logo' src='logo.png'>
    <h2 class='brand-title'>Brand Factory</h2>
  </nav>
  <div class='options'>
  <p style='margin:0;font-size:2rem;background-color:#010101;color:white;border-radius:15px;padding:2%;text-align:center;'>Order Summary</p><br><br>
  <p style='font-size:1.6rem;'><strong>Please take a moment to review your order.</strong></p><br>
  <p><strong>Name:</strong> <?php echo $fname." ".$lname;?></p>
  <p><strong>Address:</strong> <?php echo $add;?></p>
  <p><strong>State:</strong> <?php echo $state;?></p>
  <p><strong>City:</strong> <?php echo $city;?></p>
  <p><strong>Zip Code:</strong> <?php echo $zip;?></p>
  <p><strong>Phone Number:</strong> <?php echo $phno;?></p>
  <p><strong>Email:</strong> <?php echo $email;?></p><br><br>
  <table width='100%' cellspacing='0'>
   <tr bgcolor='#010101' style='color:white;border-radius:10px;'>
    <td align='center'><p><strong>Item</strong></p></td>
    <td align='center'><p><strong>Item Description</strong></p></td>
    <td align='center'><p><strong>Quantity</strong></p></td>
    <td align='center'><p><strong>Amount</strong></p></td>
   </tr>
   <tr>
    <td align='center'><p><?php echo $_SESSION['ci'];?></p></td>
    <td align='center'><p><?php echo $clo;?><?/p></td>
    <td align='center'><p><?php echo $_SESSION['quantity'];?></p></td>
    <td align='center'><p><?php echo "Rs.".$cost;?></p></td>
   </tr>
   <tr>
    <td align='center'><p>Shipping</p></td>
    <td align='center'><p><?php echo $ss;?></p></td>
    <td> </td>
    <td align='center'><p><?php echo "Rs.".$ship;?></p></td>
   </tr>
   <tr>
    <td  style='border-bottom:none;' align='center'><p style="font-size:1.8rem;"><strong>Total</strong></p></td>
    <td style='border-bottom:none;'> </td>
    <td style='border-bottom:none;'> </td>
    <td style='border-bottom:none;' align='center'><p style="font-size:1.8rem;"><strong><?php echo "Rs.".$fcost;?></strong></p> </td>
  </table><br><br>
  <form action='success.php' method='post'>
   <center><input type='submit' value='Confirm'></center>
  </form>
  </div>
</body>
</html>