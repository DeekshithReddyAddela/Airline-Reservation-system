
<?php
 
$nm1=$_POST["uid"];
$nm2=$_POST["pwd"];
$i1='';
  $al='';
  $n51='';
$n61='';
$n71=''; 
$n81='';  
mysql_connect("localhost","root","");
mysql_select_db("dbms");

$result1=mysql_query("SELECT uid,pwd FROM admin");
if (mysql_num_rows($result1) > 0) {
    while($row = mysql_fetch_assoc($result1)) {
		if($nm1==$row["uid"]){
			if($nm2==$row["pwd"]){
				mysql_query("truncate table who");
				 mysql_query("insert into who values ('$nm1')");
	  $result = mysql_query("SELECT * FROM admin where uid='$nm1'");
	if (mysql_num_rows($result) > 0) {
    while($row = mysql_fetch_array($result)){
 $n51=$row['uid'];
$n61=$row['aname'];
$n71=$row['address']; 
$n81=$row['email'];  
//print('<button class="na-btn na-white"><p>'.$n5.'   '.$n6.'   '.$n7.'</p></button></br>');	
} }
				echo('<html>
<title>employee</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="final.css">
<link rel="stylesheet" href=".css">

<body class="na-content na-light-gray" style="max-width:1300px">

<!-- First Grid: Logo & About -->
<div class="na-row">
  <div class="na-half na-black na-container na-center" style="height:700px">
    <div class="na-padding-64">
      <h1>Nani Airlines</h1>
    </div>
    <div class="na-padding-64">
	
      <a href="http://localhost/pavan/employee.php" class="na-btn na-btn-block na-hover-blue-grey na-padding-16">Home</a>
      <a href="http://localhost/pavan/employee.php#work" class="na-btn na-btn-block na-hover-teal na-padding-16">Passengers</a>
      <a href="http://localhost/pavan/employee.php#work" class="na-btn na-btn-block na-hover-dark-grey na-padding-16">Reservations</a>
      <a href="http://localhost/pavan/employee.php#flights" class="na-btn na-btn-block na-hover-brown na-padding-16">flights</a>
	  <a href="http://localhost/pavan/first.php" class="na-btn na-btn-block na-hover-sand na-padding-16">LogOut</a>
    </div>
  </div>
  <div class="na-half na-pale-red na-container" style="height:700px">
    <div class="na-padding-32 na-center">
      <h1>About Me</h1>
      <img src="http://localhost/pro/avatar3.png" class="na-margin na-circle" alt="Person" style="width:50%">
      <div class="na-left-align na-padding-xxlarge">
	 
        <p>User ID.:'); echo($n51);echo('</p>
        <p>Name    :');echo($n61); echo('</p>
		<p>Address :');echo($n71);echo(' </p>
		<p>Email   :');echo($n81);echo(' </p>
      </div>
    </div> 
  </div>
</div>
<!-- Footer -->
<footer class="na-container na-black na-padding-1">
  <p>Powered by <a href="" target="_blank">Nani</a></p>
</footer>

</body></html>');

    }
	else{				$i1=('
<!DOCTYPE html>
<html>
<title>first</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="final.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
    background-image:url("london2.jpg");
    min-height: 100%;
    background-position: center;
    background-size: cover;
}
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 20%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 10px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 40%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body>

<div class="bgimg na-display-container na-animate-opacity na-text-white">
  <div class="na-display-topright na-padding-small">
   <p><button onclick="document.getElementById(`id01`).style.display=`block`" class ="  na-black na-padding-nano" style="width:auto;">Admin</button></p>
  </div>
  <div class="na-display-middle">
    <h1 class="na-jumbo na-animate-top">Nani Airlines</h1>
    <hr class="na-border-grey" style="margin:auto;width:70%">
    <p class="na-large na-center">Travel the world with us</p>
	<form  action="http://localhost/pavan/aira.php" method="post">
 <button class="na-btn  na-display-center na-padding-12 na-hover-red na-large na-orange" onclick=window.location="c://wamp/www/pro/airlines.php">     Book Tickets    </button>
   </form></div>
  <div class="na-display-bottomleft  na-padding-small">
    Powered by nani
  </div>
</div>





<div id="id01" class="modal">
  
  <form class="modal-content animate" action="http://localhost/pavan/login.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById(`id01`).style.display=`none`" class="close" title="Close Modal">&times;</span>
      <img src="http://localhost/pavan/images/avatar3.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <input type="text" placeholder="UserId" name="uid" required autofocus>

      <input type="password" placeholder="Password" name="pwd" required>
        
      <button  >Login</button>
      <input type="checkbox" checked="checked"> Remember me
    </div>



    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById(`id01`).style.display=`none`" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>
<?php print($al);?>
<script>
// Get the modal
var modal = document.getElementById(`id01`);

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
');


     $al=('<script>alert("Invalid userid and password")</script>');
	}
}
 }
 }


 
 ?>
<?php echo($i1);?>
<?php echo($al);?>