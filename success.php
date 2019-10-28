<?php?>
<!doctype HTML>
<html>
<head>
<title>Success</title>
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
    <h2 class='brand-title'>Cloth Factory</h2>
  </nav>
 <div class='options'>
  <p style='font-size:6rem;margin-top:2%;'>Your Order Has Been Placed.</p>
  <form action='index.php' method='post'>
  <center><input type='submit' value='Okay'></center>
  </form>
 </div>
</body>
</html>