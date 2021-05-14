
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
$spgk = $_POST["pgk"];
$spdf = $_POST["pdf"];
$spcm = $_POST["pcm"];
$spfr = $_POST["pfr"];


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
     $sql = "INSERT INTO $dbname.position (player_id, gk, df,cm,fr) VALUES                                                 ('$spid','$spgk','$spdf','$spcm','$spfr')";

        if ($conn->query($sql) === TRUE) {
    echo "<h3 style=\"color:white; text-align:center; font-family:cursive;\">New record inserted successfully ! Go ahead to <a href=\"../../../database/database.php\">DATABASE</a> to see for yourself.</h3>";
} else {
header("Location:index.html");
	 
}
$conn->close();
        ?>
            </body>
</html>