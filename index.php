<?php?>
<html>
<head>
<title>My Page</title>
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
.cback{
  height:80%;
  background-image:url('download.jpg');
  background-repeat:no-repeat;
  background-size:cover;
  background-position:center right;
}
.text{
  position:absolute;
  top:65%;
  margin-left:1%;
  font-size:5rem;
  margin-top:0;
  color:white;
  text-align:center;
}
.ch{
  font-size:3rem;
  bottom:1px;
}
.sc{
  top:20%;
}
.wc{
  top:35%;
}
.shirt-type{
 
}
.cback-text{
  background-color:rgba(0,0,0,0.7);
  z-index:10;
  width:100%;
  height:100%;
}

label img {
  margin:5%;
  margin-left:8%;
  margin-bottom:0;
  height: 35%px;
  width:35%;
  transition-duration: 0.2s;
  
}
 label img:hover{
 transform:scale(1.1);
}

:checked+label img {
  transform: scale(1.05);
  box-shadow:  0 0  50px #00ff00;
  z-index:-0;
}

input[type="checkbox"][id="c1"]{
display:none;
}
input[type="checkbox"][id="c2"]{
display:none;
}
.options{
 background-color:#e3e7f1;
 margin:2%;
 padding:3%;
 padding-left:5%;
 border-radius:15px;
}
.price{
 marign-top:0;
 display:inline-block;
 position:relative; 
 top:5px;
}
.one{
 left:38.5%;
}
.two{
 left:81.5%;
}
.three{
  left:-1.8%;
}
.four{
  left:42.5%;
}
input[type='radio']{
 transform:scale(1.5);
}
.clothing-item input{
  margin:1.2%;
  margin-left:8%;
}
.clothing-item span{
  font-size:1.5rem;
}
select,input[type='number']{
 border-radius:5px;
 width:100px;
 height:30px;
 background:#eee;
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
    <img class = 'logo' src='logo.png'>
    <h2 class='brand-title'>Cloth Factory</h2>
  </nav> 
  <div class='cback'>
    <div class='cback-text'>
      <p class='sc text'>Welcome to </p>
      <p class='wc text'><span style='font-size:10rem;'>Cloth Factory.</span></p>
      <p class='ch text'>Choose your Shirt Options</p>
    </div>
  </div>
  <form action='details.php' method='post'>
  <div class='options'>
    <div class='shirt-type'>
      <p style="font-size:1.5rem;">Shirt Type<sup><font color='red'>*</font></sup></p>
      <input type="checkbox" id="c1" name='clothes[]' value='T-Shirt - Rs.599'>
      <label for="c1">  <img src="images_1.jpg" alt=""/></label>
      <input type="checkbox" id="c2" name='clothes[]' value='Hoodie - Rs.1299'>
      <label for="c2"><img src="images.jpg" alt=""/>  </label><br>
      
      <p class='price one'>Rs.599</p>
      <p class='price two'>Rs.1299</p>
      <p class='price three'>T-Shirt</p>
      <p class='price four'>Hoodie</p>
    </div>
    <div class='clothing-item'>
      <p style="font-size:1.5rem;">Clothing Item<sup><font color='red'>*</font></sup></p>
      <input type='radio' name='ci' value='Men's Clothing' required><span>Men</span><br>
      <input type='radio' name='ci' value='Women's Clothing' required><span>Women</span><br>
      <input type='radio' name='ci' value='Kids' Clothing' required><span>Children</span><br>
    </div>
    <div class='qsc'>
    <p style="font-size:1.5rem;display:inline-block;">Quantity<sup><font color='red'>*</font></sup></p>&emsp;&emsp;&emsp;&emsp;
    <p style="font-size:1.5rem;display:inline-block;">Size<sup><font color='red'>*</font></sup></p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;
    <p style="font-size:1.5rem;display:inline-block;">Colour<sup><font color='red'>*</font></sup></p><br>
    <input type='number' name='quantity' required >&emsp;&emsp;&emsp;&emsp;
    <select name='size' required >
      <option value='s'>S</option>
      <option value='m'>M</option>
      <option value='l'>L</option>
      <option value='xl'>XL</option>
    </select>&emsp;&emsp;&emsp;&emsp;
    <select name='color' required >
      <option value='red'>Red</option>
      <option value='blue'>Blue</option>
      <option value='black'>Black</option>
      <option value='yellow'>Yellow</option>
    </select><br>
  </div><br><br>
  <center><input type='submit' value='Next'></center>
 </form>
  </div>
  
</body>
</html>