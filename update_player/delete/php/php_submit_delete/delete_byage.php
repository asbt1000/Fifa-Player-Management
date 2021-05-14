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

$spages = $_POST["page"];
if(!ctype_digit(strval($spages)))
	header("location:index.html");
?>
<ul class='header'>
    <li><a href="../../../../index.html">Home</a></li>
    <li><a href="../../../../search_player/player_search.html">Search</a> </li>
    <li><a href="../../../../update_player/update.html">Update</a></li>
    <li><a href="../../../../insert_player/insert_new_player.html">Insert</a></li>
    <li><a href="../../../../database/database.php">Database</a></li>
    </ul>
<br>
<br>
<br>
<?php

$sql = "DELETE FROM personal_details WHERE age=\"$spages\"";

if ($conn->query($sql) === TRUE) {
echo "<h3 style=\"color:white;text-align:center; font-family:cursive;\"> DELETED SUCCESSFULLY ! Go ahead to <a href=\"../../../../database/database.php\">DATABASE</a> to see for yourself.</h3>";
} 
else {
header("Location:index.html");
//                        echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
</body>
</html>