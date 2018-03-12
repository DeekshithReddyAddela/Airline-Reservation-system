
<?php
 
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

$result = mysql_query("SELECT * FROM flights");
if (mysql_num_rows($result) > 0) {
    while($row = mysql_fetch_assoc($result)) {
        echo $row["fno"].$row["fname"].$row["fromadd"].$row["toadd"].$row["arrival"].$row["departure"].$row["capacity"].$row["cost"]. "<br>";
    }
} else {
    echo "0 results";
}
 
 ?>
