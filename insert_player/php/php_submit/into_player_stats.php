
<html>
<head>
<meta charset="UTF-8">
<title>Success !</title> 
<link rel="stylesheet" href="css/index.css">

</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fifa";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 


$spid = $_POST["pid"];
$spacceleration = $_POST["pacceleration"];
$spbalance = $_POST["pbalance"];
$spballcontrol = $_POST["pballcontrol"];
$spcrossing = $_POST["pcrossing"];
$spcurve = $_POST["pcurve"];
$spdribbling = $_POST["pdribbling"];
$spfinishing = $_POST["pfinishing"];
$spgkk = $_POST["pgkk"];
$spgkp = $_POST["pgkp"];
$sppenalties = $_POST["ppenalties"];
$spshortpass = $_POST["pshortpass"];
$spstamina = $_POST["pstamina"];
$spstrength = $_POST["pstrength"];

?>
<div >     
     
    <ul class='header'>
    <li><a href="../../../index.html">Home</a></li>
    <li><a href="../../../search_player/player_search.html">Search</a> </li>
    <li><a href="../../../update_player/update.html">Update</a></li>
    <li><a href="../../../insert_player/insert_new_player.html">Insert</a></li>
    <li><a href="../../../database/database.php">Database</a></li>
    </ul>
 </div>  
 <br>
 <br>


<?php
$sql = "INSERT INTO $dbname.player_stats (player_id, acceleration, balance,ball_control,crossing,curve,dribbling,finishing,gk_kicking,gk_positioning,penalties,short_pass,stamina,strength) VALUES                                                 ('$spid','$spacceleration','$spbalance','$spballcontrol','$spcrossing','$spcurve','$spdribbling','$spfinishing','$spgkk','$spgkp','$sppenalties','$spshortpass','$spstamina','$spstrength')";

if ($conn->query($sql) === TRUE) {
echo "<h3 style=\"color:white; text-align:center; font-family:cursive;\">New record inserted successfully ! Go ahead to <a href=\"../../../database/database.php\">DATABASE</a> to see for yourself.</h3>";
} else {
header("Location:index.html");
}
$conn->close();
?>
</body>
</html>