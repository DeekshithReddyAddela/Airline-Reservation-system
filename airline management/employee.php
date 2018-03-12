<?php
$n12='';
$af1='';$af2='';$af3='';
$n20='';$n21='';$n22='';$n23='';$n24='';$n25='';$n26=''; $n27='';
$n30='';$n31='';$n32='';$n33='';$n34='';$n35='';$n36=''; $n37='';
$n40='';$n41='';$n42='';$n43='';$n44='';$n45='';$n46=''; $n47='';
 if(isset($_POST['submit'])){
$nm1=$_POST["i1"];
$nm2=$_POST["i2"];
$nm3=$_POST["i3"];
$nm4=$_POST["i4"];
$nm5=$_POST["i5"];
$nm6=$_POST["i6"];
$nm7=$_POST["i7"];
$nm8=$_POST["i8"];

mysql_connect("localhost","root","");
mysql_select_db("dbms");

	 mysql_query("insert into flights values($nm1,'$nm2','$nm3','$nm4','$nm5','$nm6',$nm7,$nm8)");
$result1=mysql_query("SELECT fno,fname FROM flights");
    while($row1 = mysql_fetch_assoc($result1)) {
		if($nm1==$row1["fno"]){
     $n12='<script>alert("Successfully new flight is added to database")</script>';
}}
	
 }	
 
 
 ?>
<html>
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
      <a href="#" class="na-btn na-btn-block na-hover-blue-grey na-padding-16">Home</a>
      <a href="#work" class="na-btn na-btn-block na-hover-teal na-padding-16">Passengers</a>
      <a href="#work1" class="na-btn na-btn-block na-hover-dark-grey na-padding-16">Reservations</a>
      <a href="#flights" class="na-btn na-btn-block na-hover-brown na-padding-16">flights</a>
	  <a href="http://localhost/pavan/first.php" class="na-btn na-btn-block na-hover-sand na-padding-16">LogOut</a>
    </div>
  </div>
  <div class="na-half na-pale-red na-container" style="height:700px">
    <div class="na-padding-32 na-center">
      <h1>About Me</h1>
      <img src="http://localhost/pro/avatar3.png" class="na-margin na-circle" alt="Person" style="width:50%">
      <div class="na-left-align na-padding-xxlarge">
	  <?php
mysql_connect("localhost","root","");
mysql_select_db("dbms");
	  
	  $n501='';
	  $res = mysql_query("SELECT * FROM who");
	if (mysql_num_rows($res) > 0) {
    while($row = mysql_fetch_array($res)){
	$n501=$row['id'];}}
	  $result = mysql_query("SELECT * FROM admin where uid='$n501'");
	if (mysql_num_rows($result) > 0) {
    while($row = mysql_fetch_array($result)){
 $n51=$row['uid'];
$n61=$row['aname'];
$n71=$row['address']; 
$n81=$row['email'];  
//print('<button class="na-btn na-white"><p>'.$n5.'   '.$n6.'   '.$n7.'</p></button></br>');	
} }?>
        <p>User ID.:<?php print($n51);?> </p>
        <p>Name    :<?php print($n61);?> </p>
		<p>Address :<?php print($n71);?> </p>
		<p>Email   :<?php print($n81);?> </p>
      </div>
    </div> 
  </div>
</div>

<!-- Second Grid: pass&res -->
<div class="na-row">
  <div class="na-half na-sand " style="min-height:700px" id="work">
    <div class="na-padding-16 na-center">
      <h2>Passengers</h2>
      <p>Get Details of Passengers</p>
	    <div class="na-container na-text-black   ">
         <form  action="employee.php#work" method="post">
	<fieldset>
 <input class="na-input na-border"placeholder="Enter Passenger Passport Number" type="text" name="i2a" tabindex="1" ></fieldset>
	
	 <fieldset>
      <button class="na-btn na-orange" name="submit5" type="submit" id="contact-submit" onclick="" >Submit</button></fieldset>
	  <?php
	  if(isset($_POST['submit5'])){
$pan=$_POST['i2a'];
$result6=mysql_query("SELECT * FROM passengers where ppn='$pan'");
if(mysql_num_rows($result6) > 0) {
    while($row = mysql_fetch_assoc($result6)) {
		$n30=$row['ppn'];
$n31=$row['pname'];
$n32=$row['age'];
$n33=$row['contact'];
$n34=$row['email'];
$n35=$row['address'];
$n36=$row['country']; 
$af2="<div class=\"na-container na-large  na-text-black \">
		<pre>Passport No.      :".$n30."</pre>
        <pre>Passenger Name    :".$n31."</pre>
		<pre>Age               :".$n32."</pre>
		<pre>Contact           :".$n33."</pre>
		<pre>Email ID.         :".$n34."</pre>
        <pre>Address           :".$n35."</pre>
		<pre>Country           :".$n36."</pre>
     
      </div>";
	  } }else{$af2="<div class=\"na-container na-large na-display-center na-text-black \"><pre>There is no Passenger in database with passport no.".$pan."<pre></div>";}}?> 
		  </div> </div><?php print($af2);?>
   
  </div>
  <div class="na-half na-light-blue na-container" style="min-height:700px" id="work1">
    <div class="na-padding-16 na-center">
      <h2>Reservations</h2>
      <p>Get Reservations details</p>
      <div class="na-container na-text-black na-display-center  ">
         <form  action="employee.php#work1" method="post">
	<fieldset>
 <input class="na-input na-border"placeholder="Enter Passenger Passport Number" type="text" name="i2b" tabindex="1"  ></fieldset>
	
	 <fieldset>
	 <fieldset>
 <input class="na-input na-border"placeholder="Enter Fligt Number" type="text" name="i2c" tabindex="1"  ></fieldset>
	
	 <fieldset>
      <button class="na-btn na-orange" name="submit6" type="submit" id="contact-submit" onclick="" >Submit</button></fieldset>
	  <?php
	  if(isset($_POST['submit6'])){
$oan=$_POST['i2b'];
$qan=$_POST['i2c'];
$result7=mysql_query("SELECT * FROM reservations where ppn='$oan'or fno='$qan'");
if (mysql_num_rows($result7) > 0) {
    while($row = mysql_fetch_assoc($result7)) {
		$n40=$row['ppn'];
$n41=$row['fno'];
$n42=$row['day'];
$n43=$row['amount'];

$af3="<div class=\"na-container na-large na-display-center na-text-black \">
		<pre>Passport No.     :".$n40."</pre>
        <pre>Flight No.       :".$n41."</pre>
		<pre>Day              :".$n42."</pre>
		<pre>Amount           :".$n43."</pre>
	
     
      </div>";
	  } }else{$af3="<div class=\"na-container na-large na-display-center na-text-black \"><pre>Flight no. or Passport No. doesn't match with data in
Database<pre></div>";}}
	  ?>
		 </form> </div> </div><?php print($af3); ?>
  </div>
</div>

<!-- third Grid: flights -->
<div class="na-row">
  <div class="na-half na-brown" style="min-height:700px" id="flights">
    <div class="na-padding-16  na-center">
      <h2>Flights</h2>
      <p>Get Details of Flights</p>
	  <div class="na-container na-text-black na-display-center  ">
         <form  action="employee.php#flights" method="post">
	<fieldset>
 <input class="na-input na-border"placeholder="Enter Fligt Number" type="text" name="i20" tabindex="1" required  ></fieldset>
	
	 <fieldset>
      <button class="na-btn na-orange" name="submit1" type="submit" id="contact-submit" onclick="" >Submit</button></fieldset>
	  <?php
	  if(isset($_POST['submit1'])){
$nan=$_POST['i20'];
$result5=mysql_query("SELECT * FROM flights where fno='$nan'");
if (mysql_num_rows($result5) > 0) {
    while($row = mysql_fetch_assoc($result5)) {
		$n20=$row['fno'];
$n21=$row['fname'];
$n22=$row['fromadd'];
$n23=$row['toadd'];
$n24=$row['arrival'];
$n25=$row['departure'];
$n26=$row['capacity']; 
$n27=$row['cost'];
$af1="<div class=\"na-container na-large na-display-center na-text-black \">
		<pre>Flight No.     :".$n20."</pre>
        <pre>Flight Name    :".$n21."</pre>
		<pre>Departing From :".$n22."</pre>
		<pre>Arrival At     :".$n23."</pre>
		<pre>Departure Time :".$n24."</pre>
        <pre>Arrival Time   :".$n25."</pre>
		<pre>Capacity       :".$n26."</pre>
		<pre>Cost           :".$n27."</pre>
     
      </div>";
	  } }else{$af1="<div class=\"na-container na-large na-display-center na-text-black \"><pre>There is no flight in database with flight number :".$nan."<pre></div>";}}?>
		 </form> </div> </div><?php print($af1); ?></div>
  
  <div class="na-half na-green na-container" style="min-height:700px">
    <div class="na-padding-16 na-center">
      <h2>Add Flights</h2>
      <p>Enter new flights details</p>
      <div class="na-container na-center  ">
         <form  action="employee.php" method="post">
	<fieldset>
 <input class="na-input na-border"placeholder="Fligt Number" type="text" name="i1" tabindex="1" required ></fieldset>
	<fieldset>
 <input class="na-input na-border" placeholder="Fligt Name" type="text" name="i2" tabindex="2" id="i2" required> </fieldset>
	 <fieldset>
 <input class="na-input na-border"placeholder="Departing From" type="text" name="i3" tabindex="3" id="i3" required> </fieldset>
	 <fieldset>
 <input class="na-input na-border"placeholder="Arrival At" type="text" name="i4" tabindex="4" id="i4" required> </fieldset>
	 <fieldset>
 <input class="na-input na-border"placeholder="Departure Time" type="text" name="i5" tabindex="5" id="i5" required></fieldset>
	 <fieldset>
 <input class="na-input na-border"placeholder="Arrival Time" type="text" name="i6" tabindex="6" id="i6" required></fieldset>
	 <fieldset>
 <input class="na-input na-border"placeholder="Capacity" type="text" name="i7" tabindex="7" id="i7" required> </fieldset>
	 <fieldset>
 <input class="na-input na-border"placeholder="Cost" type="text" name="i8" tabindex="8" id="i8" required> </fieldset>
     <fieldset>
      <button class="na-btn na-orange" name="submit" type="submit" id="contact-submit" >Submit</button></fieldset>
  </form>
      </div>
    </div>
  </div>
</div>



<!-- Footer -->
<footer class="na-container na-black na-padding-1">
  <p>Powered by <a href="" target="_blank">Nani</a></p>
</footer>
<?php print($n12);?>
</body>
</html>
