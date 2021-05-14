<!DOCTYPE html>
<html lang="en" >

<head>
<meta charset="UTF-8">
<title>Insert Player Data</title>
 <link rel="stylesheet" href="css/index.css">
 <link rel="stylesheet" href="css/insert.css">
 <style>
 label
 {
	 color:white;
 }
 </style>
</head>

<body">

<div >     
    <ul class='header'>
    <li><a href="../../index.html">Home</a></li>
    <li><a href="../../search_player/player_search.html">Search</a> </li>
    <li><a href="../../update_player/update.html">Update</a></li>
    <li><a href="../../insert_player/insert_new_player.html">Insert</a></li>
    <li><a href="../../database/database.php">Database</a></li>
    </ul>
 </div>  
 <br>
 <br>
 <br>

</body>

</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 

$choices = strtoupper($_POST["choices_single_defaul"]);

if($choices=='PERSONAL_DETAILS'){
echo "<form action=\"php_submit/into_personal_details.php\" method=\"post\">";
echo "<label for=\"input-1\">ENTER PLAYER ID</label>";
echo "<input id=\"input-1\" type=\"text\" placeholder=\"PlayerID\" required autofocus name=\"pid\"/>";
echo "<label for=\"input-2\">ENTER PLAYER NAME</label>";
echo "<input id=\"input-2\" type=\"text\" placeholder=\"Player Name\" required name=\"pname\"/>";
echo "<label for=\"input-3\">ENTER AGE</label>";
echo "<input id=\"input-3\" type=\"text\" placeholder=\"Age\" required name=\"page\"/>";
echo "<label for=\"input-4\">ENTER OVERALL RATING</label>";
echo "<input id=\"input-4\" type=\"text\" placeholder=\"Overall Rating\" required name=\"poverallrating\"/>";
echo "<label for=\"input-5\">ENTER NATIONALITY</label>";
echo "<input id=\"input-5\" type=\"text\" placeholder=\"Nationality\" required name=\"pnationality\"/>";
echo "<input type=\"submit\" onclick=\"php_submit/into_personal_details.php\" value=\"Submit\"/>";
echo "</form>";
}

else  if($choices=='PLAYER_CLUB'){

echo "<form action=\"php_submit/into_other_details.php\" method=\"post\">";
echo "<label for=\"input-1\">ENTER PLAYER ID</label>";
echo "<input id=\"input-1\" type=\"text\" placeholder=\"PlayerID\" required autofocus name=\"pid\"/>";
echo "<label for=\"input-2\">ENTER PLAYER CLUB</label>";
echo "<input id=\"input-2\" type=\"text\" placeholder=\"Player Club\" required name=\"pclub\"/>";
echo "<label for=\"input-3\">ENTER PREFERRED POSITION</label>";
echo "<input id=\"input-3\" type=\"text\" placeholder=\"Preferred Position\" required name=\"ppreferredposition\"/>";
echo "<input type=\"submit\" onclick=\"php_submit/into_other_details.php\" value=\"Submit\"/>";
echo "</form>";

}

else  if($choices=='PLAYER_POSITION'){

echo "<form action=\"php_submit/into_position.php\" method=\"post\">";
echo "<label for=\"input-1\">ENTER PLAYER ID</label>";
echo "<input id=\"input-1\" type=\"text\" placeholder=\"PlayerID\" required autofocus name=\"pid\"/>";
echo "<label for=\"input-2\">ENTER PLAYER @ GOALKEEPER</label>";
echo "<input id=\"input-2\" type=\"text\" placeholder=\"Player@GoalKeeper\" required name=\"pgk\"/>";
echo "<label for=\"input-3\">ENTER PLAYER @ DEFENDER</label>";
echo "<input id=\"input-3\" type=\"text\" placeholder=\"Player@Defender\" required name=\"pdf\"/>";
echo "<label for=\"input-4\">ENTER PLAYER @ CENTRAL-MID</label>";
echo "<input id=\"input-4\" type=\"text\" placeholder=\"Player@Central-Mid\" required name=\"pcm\"/>";
echo "<label for=\"input-2\">ENTER PLAYER @ FORWARD</label>";
echo "<input id=\"input-5\" type=\"text\" placeholder=\"Player@Forward\" required name=\"pfr\"/>";
echo "<input type=\"submit\" onclick=\"php_submit/into_position.php\" value=\"Submit\"/>";
echo "</form>";
}

else  if($choices=='PLAYER_STATS'){

echo "<form action=\"php_submit/into_player_stats.php\" method=\"post\">";
echo "<label for=\"input-1\">ENTER PLAYER ID</label>";
echo "<input id=\"input-1\" type=\"text\" placeholder=\"PlayerID\" required autofocus name=\"pid\"/>";
echo "<label for=\"input-2\">ENTER PLAYER ACCELERATION</label>";
echo "<input id=\"input-2\" type=\"text\" placeholder=\"Player Acceleration\" required name=\"pacceleration\"/>";
echo "<label for=\"input-3\">ENTER PLAYER BALANCE</label>";
echo "<input id=\"input-3\" type=\"text\" placeholder=\"Player Balance\" required name=\"pbalance\" />";
echo "<label for=\"input-4\">ENTER PLAYER BALL CONTROL</label>";
echo "<input id=\"input-4\" type=\"text\" placeholder=\"Player Ball Control\" required name=\"pballcontrol\"/>";
echo "<label for=\"input-5\">ENTER PLAYER CROSSING</label>";
echo "<input id=\"input-5\" type=\"text\" placeholder=\"Player Crossing\" required name=\"pcrossing\"/>";
echo "<label for=\"input-6\">ENTER PLAYER CURVE</label>";
echo "<input id=\"input-6\" type=\"text\" placeholder=\"Player Curve\" required name=\"pcurve\"/>";
echo "<label for=\"input-7\">ENTER PLAYER DRIBBLING</label>";
echo "<input id=\"input-7\" type=\"text\" placeholder=\"Player Dribbling\" required name=\"pdribbling\"/>";
echo "<label for=\"input-8\">ENTER PLAYER FINISHING</label>";
echo "<input id=\"input-8\" type=\"text\" placeholder=\"Player Finishing\" required name=\"pfinishing\"/>";
echo "<label for=\"input-9\">ENTER PLAYER GK KICKING</label>";
echo "<input id=\"input-9\" type=\"text\" placeholder=\"Player GK Kicking\" required name=\"pgkk\"/>";
echo "<label for=\"input-10\">ENTER PLAYER GK POSITIONING</label>";
echo "<input id=\"input-10\" type=\"text\" placeholder=\"Player GK Positioning\" required name=\"pgkp\"/>";
echo "<label for=\"input-11\">ENTER PLAYER PENALTIES</label>";
echo "<input id=\"input-11\" type=\"text\" placeholder=\"Player Penalties\" required name=\"ppenalties\"/>";
echo "<label for=\"input-12\">ENTER PLAYER SHORT PASS</label>";
echo "<input id=\"input-12\" type=\"text\" placeholder=\"Player Short Pass\" required name=\"pshortpass\"/>";
echo "<label for=\"input-13\">ENTER PLAYER STAMINA</label>";
echo "<input id=\"input-13\" type=\"text\" placeholder=\"Player Stamina\" required name=\"pstamina\"/>";
echo "<label for=\"input-14\">ENTER PLAYER STRENGTH</label>";
echo "<input id=\"input-14\" type=\"text\" placeholder=\"Player Strength\" required name=\"pstrength\"/>";
echo "<input type=\"submit\" onclick=\"php_submit/into_player_stats.php\" value=\"Submit\"/>";
echo "</form>";

}
else if($choices=='PLAYER_EARNINGS'){

echo "<form action=\"php_submit/into_salary.php\" method=\"post\">";
echo "<label for=\"input-1\">ENTER PLAYER ID</label>";
echo "<input id=\"input-1\" type=\"text\" placeholder=\"PlayerID\" required autofocus name=\"pid\" />";
echo "<label for=\"input-2\">ENTER PLAYER WAGES</label>";
echo "<input id=\"input-2\" type=\"text\" placeholder=\"Player Wages\" required name=\"pwage\"/>";
echo "<label for=\"input-3\">ENTER PLAYER VALUE</label>";
echo "<input id=\"input-3\" type=\"text\" placeholder=\"Player Value\" required name=\"pvalue\"/>";
echo "<input type=\"submit\" onclick=\"php_submit/into_salary.php\" value=\"Submit\"/>";
echo "</form>";
}
else
	header("location:index.html");


?>
