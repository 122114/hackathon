
<?php

// Create connection
$con = mysql_connect("localhost","root","");
mysql_select_db("wbg",$con);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
