<!DOCTYPE html>
<html lang="en" >

<head>
<meta charset="UTF-8">
<title>Delete Player Data</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

<link rel="stylesheet" href="css/index.css">
<STYLE>
label
{
	color:white;
	margin-left:450px;
}
</STYLE>
</head>

<body>


<ul class='header'>
    <li><a href="../../../index.html">Home</a></li>
    <li><a href="../../../search_player/player_search.html">Search</a> </li>
    <li><a href="../../../update_player/update.html">Update</a></li>
    <li><a href="../../../insert_player/insert_new_player.html">Insert</a></li>
    <li><a href="../../../database/database.php">Database</a></li>
    </ul>
	<br><br>
	<br>
	<br>
	<br>
 </div><?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 

$choices = strtoupper($_POST["choices-single-defaul"]);
?>
<?php
if($choices=='BY AGE'){
echo "<form action=\"php_submit_delete/delete_byage.php\" method=\"post\">";
echo "<label for=\"input-1\">ENTER PLAYER AGE : </label>";
echo "<input id=\"input-1\" type=\"text\" placeholder=\"PLAYER AGE\" required autofocus name=\"page\"/>";
echo "<button type=\"submit\" onclick=\"php_submit_delete/delete_byage.php\" class=\"signup-button\">DELETE</button>";
echo "</form>";
}

else  if($choices=='BY NAME'){

echo "<form action=\"php_submit_delete/delete_byname.php\" method=\"post\">";
echo "<label for=\"input-1\">ENTER PLAYER NAME : </label>";
echo "<input id=\"input-1\" type=\"text\" placeholder=\"PLAYER NAME\" required autofocus name=\"pname\"/>";
echo "<button type=\"submit\" onclick=\"php_submit_delete/delete_byname.php\" class=\"signup-button\">DELETE</button>";
echo "</form>";

}

else  if($choices=='BY PLAYER ID'){

echo "<form action=\"php_submit_delete/delete_byplayerid.php\" method=\"post\">";
echo "<label for=\"input-1\">ENTER PLAYER ID : </label>";
echo "<input id=\"input-1\" type=\"text\" placeholder=\"PLAYER ID\" required autofocus name=\"pid\"/>";
echo "<button type=\"submit\" onclick=\"php_submit_delete/delete_playerid.php\" class=\"signup-button\">DELETE</button>";
echo "</form>";
}

else  if($choices=='BY OVERALL RATING'){

echo "<form action=\"php_submit_delete/delete_byoverallrating.php\" method=\"post\">";
echo "<label for=\"input-1\">ENTER OVERALL RATING : </label>";
echo "<input id=\"input-1\" type=\"text\" placeholder=\"OVERALL RATING\" required autofocus name=\"poverall_rating\"/>";
echo "<button type=\"submit\" onclick=\"php_submit_delete/delete_byoverallrating.php\" class=\"signup-button\">DELETE</button>";
echo "</form>";

}
else if($choices=='BY NATIONALITY'){

echo "<form action=\"php_submit_delete/delete_bynationality.php\" method=\"post\">";
echo "<label for=\"input-1\">ENTER PLAYER NATIONALITY : </label>";
echo "<input id=\"input-1\" type=\"text\" placeholder=\"PLAYER NATIONALITY\" required autofocus name=\"pnationality\" />";
echo "<button type=\"submit\" onclick=\"php_submit_delete/delete_bynationality.php\" class=\"signup-button\">DELETE</button>";
echo "</form>";

}
else {
header("Location:index.html");
}

?>
</body>

</html>
