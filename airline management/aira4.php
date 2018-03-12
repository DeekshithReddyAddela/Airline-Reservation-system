<?php
require 'connect.inc.php';



echo"<!DOCTYPE html>
<html>
<title>airlines</title>
<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link rel=\"stylesheet\" href=\"final.css\">

<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Raleway\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: \"Raleway\", Arial, Helvetica, sans-serif}
.myLink {display: none}
</style>
<body class=\"na-light-grey\">

<!-- Navigation Bar -->
<div class=\"na-top\">
  <div class=\"na-bar na-white na-card-2\" id=\"myNavbar\">
<ul id=\"header\"class=\"na-navbar na-white na-border-bottom na-large\">
  <li><a href=\"#\" class=\"na-text-red na-hover-red\"><b>Nani Airlines</b></a></li>
</ul>
</div>
</div>
<style>


#c{background-color:#f44336;
}

</style>

<header>";

  echo'<img class=\"na-image\" src="http://localhost/pavan/images/london2.jpg" alt="London" width="1500" height="700">';
  echo"
  <div class=\"na-display-middle\" style=\"width:65%\">
    <div class=\"na-bar na-black\">
      <button id=\"f\" class=\"na-bar-item na-button na-green tablink\"><i class=\"fa fa-plane na-margin-right\"></i>Flights</button>
     <button id=\"h\" class=\"na-bar-item na-button na-green tablink\"><i class=\"fa fa-ticket na-margin-right\"></i>Select Flight</button>
      	  <button id=\"d\" class=\"na-bar-item na-green na-button tablink\"><i class=\"fa fa-openid na-margin-right\"></i>Details</button>
	  <button id=\"c\" class=\"na-bar-item na-button tablink\"><i class=\"fa fa-credit-card na-margin-right\"></i>Payement</button>

    </div>

    <!-- Tabs -->
	<form action=\"air2.php\" method=\"Get\">
    <div id=\"Flight\" class=\"na-container na-light-gray na-padding-16 myLink\">
      <h3>Travel the world with us</h3>
      <div class=\"na-row-padding\" style=\"margin:0 -16px;\">
       
	    <div class=\"na-half\">
          <label>From</label>
          <select class=\"na-input na-border\" type=\"text\" placeholder=\"City or Airport\">
		  <option value=\"1\">unhal</option>
<option value=\"13\">heal</option>
</select>
		  
        </div>
        <div class=\"na-half\">
          <label>To</label>
          <input class=\"na-input na-border\" type=\"text\" placeholder=\"City or Airport\">
        </div>
		
      </div>
	  </br>
	   <div class=\"na-row-padding\" style=\"margin:0 -16px;\">
       
	    <div class=\"na-half\">
          <label>Choose Date</label>
          <input class=\"na-input na-border\" type=\"text\" placeholder=\"DD MM YYYY\">
        </div>
        <div class=\"na-half\">
          <label>Class</label>
         <select class=\"na-input na-border\" type=\"text\">
  <option value=\"volvo\">Business</option>
  <option value=\"saab\">Economy</option>
  <option value=\"opel\">Premium</option>
</select>
        </div>
		
      </div>


      <p><button type=\"submit\" value=\"Submit\" class=\"na-btn na-large  na-bold na-orange na-right\" onmousedown=\"h.style.background='#f44336', f.style.background='#4CAF50';\" onclick=\"openLink(event, 'Hotel');\">Search Flights</button></p>
    </div>
	</form>
	
	<form action=\"aira3.php\" method=\"Get\">
	<div id=\"Hotel\" class=\"na-container na-white na-padding-16 myLink\">
      <h2>Flights matching your Results</h2>";
	 
	 
	  if (isset($_GET['uh'])&&!empty($_GET['uh'])){
	$uh = strtolower($_GET['uh']);
	$fh = strtolower($_GET['fh']);
	$ch=$_GET['ch'];

		

$query = "SELECT * FROM flights WHERE toadd='$uh' and fromadd='$fh'";

if($query_run= mysql_query($query)){
		  echo "<div class=\"w3-container\">
    <table class=\"na-table na-striped na-bordered na-border na-hoverable na-white\">
      <tr>
        <td><h5>FlightNo</h5></td>
        <td><h5>FlightName</h5></td>
		<td><h5>To</h5></td>
		<td><h5>From</h5></td>
		<td><h5>Arrival</h5></td>
		<td><h5>Departure</h5></td>
		<td><h5>Cost</h5></td>
		<td><h5></h5> </td>
      </tr>";
	while ($query_row = mysql_fetch_assoc($query_run)){
	$toadd=$query_row['toadd'];
	$fromadd=$query_row['fromadd'];
	$fname=$query_row['fname'];
	$fno=$query_row['fno'];
	$arrival=$query_row['arrival'];
	$departure=$query_row['departure'];
	$cost=$query_row['cost'];
	  
      echo"<tr>
        <td>$fno</td>
        <td>$fname</td>
		<td>$toadd</td>
		<td>$fromadd</td>
		<td>$arrival</td>
		<td>$departure</td>
		<td>$cost</td>
		<td>  <button name=\"uh\" value=$fno class=\"na-button na-dark-grey\" onmousedown=\"d.style.background='#f44336', h.style.background='#4CAF50';\"onclick=\"openLink(event, 'Car');\">Select Flight</button>    </td>
		
		
      </tr>";
      
      
      
      
   

	
	
	
	
	}
	 echo "</table><br>
  </div>";
		
	}
else{
	echo mysql_error();

	}
}

$fn=$_POST['fn'];
$em = $_POST['em'];
	$fulna = ($_POST['fulna']);
	$ad =$_POST['ad'];
	$passno=$_POST['passno'];
	$age=$_POST['age'];
	$ph=$_POST['ph'];
	$con=$_POST['con'];
	$day=$_POST['day'];
	
	$query2= "insert into passengers values('$passno','$fulna',$age,'$ph','$em','$ad','$con')";
	$query_run2= mysql_query($query2);
      
    echo"</div>
</form>
    <div id=\"Car\" class=\"na-container na-light-gray myLink\">
     <div class=\"container na-center\">  
  <form action=\"confirm.php\" method=\"Post\">
    <h3> Enter Details</h3>
	<div class=\"na-container na-margin-right na-padding-xl\">
	<ul class=\"na-ul na-center na-form\">
	<fieldset>
<li class=\"na-center\"> <input class=\"na-input na-border na-center\" placeholder=\"Passport Number\" type=\"text\" name=\"passno\" value=$passno tabindex=\"1\" required autofocus></fieldset>
	<fieldset></li>
 <li>  <input class=\"na-input na-border na-center\" placeholder=\"Full Name\" type=\"text\" name=\"fulna\" value=$fulna tabindex=\"2\" id=\"i2\" required> </fieldset>
	 <fieldset></li>
 <li>  <input class=\"na-input na-border na-center\" placeholder=\"age\" type=\"number\" name=\"age\" value=$age tabindex=\"3\" id=\"i3\" required> </fieldset>
	 <fieldset></li>
 <li>  <input class=\"na-input na-border na-center\"placeholder=\"Phone No\" type=\"text\" name=\"ph\" value=$ph tabindex=\"4\" id=\"i4\" required> </fieldset>
	 <fieldset></li>
 <li>  <input class=\"na-input na-border na-center\"placeholder=\"Email Id\" type=\"email\" name=\"em\" value=$em tabindex=\"5\" id=\"i5\" required></fieldset>
	 <fieldset></li>
 <li>  <input class=\"na-input na-border na-center\"placeholder=\"Address\" type=\"text\" name=\"ad\" value=$ad tabindex=\"6\" id=\"i6\" required></fieldset>
	 <fieldset></li>
 <li>  <input class=\"na-input na-border na-center\"placeholder=\"Country\" type=\"text\" name=\"con\" value=$con tabindex=\"7\" id=\"i7\" required> </fieldset>
	 <fieldset></li></ul>
 
      <button class=\"na-orange na-center na-btn na-large\" onmousedown=\"c.style.background='#f44336',d.style.background='#4CAF50';\" onclick=\"openLink(event, 'Payment');\" name=\"submit\" type=\"submit\" id=\"contact-submit\" >Submit</button></fieldset>
  </div>
  
</div>
    </div>";
	
	
	
	
	
	echo"
	
	<div id=\"Payment\" class=\"na-container na-white na-padding-16 myLink\">
      <h3>Enter CreditCard Details</h3>
      
      <div style=\"display: none;\">
	<input  class=\"na-input na-border\"  type=\"text\" placeholder=\"DD MM YYYY\"  name=\"day\" value=$day >
	</div>
	  <input name=\"canno\" class=\"na-input na-border\" type=\"text\" placeholder=\"CardNumber\"></br>
	  <input name=\"canno\" class=\"na-input na-half na-border\" type=\"text\" placeholder=\"Expiry (MM/YY)\">
	  <input name=\"canno\" class=\"na-input na-half na-border\" type=\"text\" placeholder=\"CVV\"></br>
      <p></br><button name=\"fn\" type=\"submit\" value=$fn class=\"na-btn na-large  na-bold na-orange na-right\">Proceed Further</button></p>
    </div>
	
	</form>

   
  </div>
  
 
</header>";
	
	
	echo"


<!-- Page content -->
<div class=\"na-content\" style=\"max-width:1100px;\">

  
  <!-- Good offers -->
  <div class=\"na-container na-margin-top\">
    <h3>Good Offers Right Now</h3>
    <h6>Up to <strong>50%</strong> discount.</h6>
  </div>
  <div class=\"na-row-padding na-text-white na-large\">
    <div class=\"na-half na-margin-bottom\">
      <div class=\"na-display-container\">
        <img src=\"http://localhost/pavan/images/cinqueterre.jpg\" alt=\"Cinque Terre\" style=\"width:100%\">
        <span class=\"na-display-bottomleft na-padding\">Cinque Terre</span>
      </div>
    </div>
    <div class=\"na-half\">
      <div class=\"na-row-padding\" style=\"margin:0 -16px\">
        <div class=\"na-half na-margin-bottom\">
          <div class=\"na-display-container\">
            <img src=\"http://localhost/pavan/images/newyork2.jpg\" alt=\"New York\" style=\"width:100%\">
            <span class=\"na-display-bottomleft na-padding\">New York</span>
          </div>
        </div>
        <div class=\"na-half na-margin-bottom\">
          <div class=\"na-display-container\">
            <img src=\"http://localhost/pavan/images/sanfran.jpg\" alt=\"San Francisco\" style=\"width:100%\">
            <span class=\"na-display-bottomleft na-padding\">San Francisco</span>
          </div>
        </div>
      </div>
      <div class=\"na-row-padding\" style=\"margin:0 -16px\">
        <div class=\"na-half na-margin-bottom\">
          <div class=\"na-display-container\">
            <img src=\"http://localhost/pavan/images/pisa.jpg\" alt=\"Pisa\" style=\"width:100%\">
            <span class=\"na-display-bottomleft na-padding\">Pisa</span>
          </div>
        </div>
        <div class=\"na-half na-margin-bottom\">
          <div class=\"na-display-container\">
            <img src=\"http://localhost/pavan/images/paris.jpg\" alt=\"Paris\" style=\"width:100%\">
            <span class=\"na-display-bottomleft na-padding\">Paris</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Explore Nature -->
  <div class=\"na-container\">
    <h3>Explore Nature</h3>
    <p>Travel with us and see nature at its finest.</p>
  </div>
  <div class=\"na-row-padding\">
    <div class=\"na-half na-margin-bottom\">
      <img src=\"http://localhost/pavan/images/ocean2.jpg\" alt=\"Norway\" style=\"width:100%\">
      <div class=\"na-container na-white\">
        <h3>West Coast, Norway</h3>
        <p class=\"na-opacity\">One-way from ₹39,999</p>
        <button class=\"na-btn na-margin-bottom\">Buy Tickets</button>
      </div>
    </div>
    <div class=\"na-half na-margin-bottom\">
      <img src=\"http://localhost/pavan/images/mountains2.jpg\" alt=\"Austria\" style=\"width:100%\">
      <div class=\"na-container na-white\">
        <h3>Mountains, Austria</h3>
        <p class=\"na-opacity\">One-way from ₹24,999</p>
        <button class=\"na-btn na-margin-bottom\">Buy Tickets</button>
      </div>
    </div>
  </div>

 
  <div class=\"na-container\">
    <h2>Contact</h2>
    <p>Let us book your next trip!</p>
    <i class=\"fa fa-map-marker\" style=\"width:30px\"></i> Hyderabad, INDIA<br>
    <i class=\"fa fa-phone\" style=\"width:30px\"></i> Phon +91 8498810227<br>
    <i class=\"fa fa-envelope\" style=\"width:30px\"> </i> Email: deekshithreddy9@gmail.com<br>
   
  </div>
  
<!-- End page content -->
</div>

<!-- Footer -->
<footer class=\"na-container na-center na-opacity na-margin-bottom\">
  <h5>Find Us On</h5>
  <div class=\"na-xlarge na-padding-16\">
    <i class=\"fa fa-facebook-official na-hover-text-indigo\"></i>
    <i class=\"fa fa-instagram na-hover-text-purple\"></i>
    <i class=\"fa fa-snapchat na-hover-text-yellow\"></i>
    <i class=\"fa fa-pinterest-p na-hover-text-red\"></i>
    <i class=\"fa fa-twitter na-hover-text-light-blue\"></i>
    <i class=\"fa fa-linkedin na-hover-text-indigo\"></i>
  </div>
  <p>Powered by <a  target=\"_blank\" class=\"na-hover-text-green\">nani</a></p>
</footer>

<script>
// Tabs
function openLink(evt, linkName) {
  var i, x, tablinks;
  x = document.getElementsByClassName(\"myLink\");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = \"none\";
  }
  tablinks = document.getElementsByClassName(\"tablink\");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(\" na-red\", \"\");
  }
  document.getElementById(linkName).style.display = \"block\";
  evt.event.className += \" na-red\";
}
// Click on the first tablink on load
openLink(event, 'Payment');
document.getElementsByClassName(\"tablink\")[0].click();
</script>

</body>
</html>"
?>