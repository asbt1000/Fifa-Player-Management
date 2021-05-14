
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Modify Player Data</title>
  <link rel="stylesheet" href="styling.css">
    
    
    <style>
    
    
 background-image: linear-gradient(to right top, #123e80, #003462, #002843, #021a26, #030709);        
        
</style>
    
    
</head>

<body>

 <div>       
  <ul class='header'>
    <li><a href="../../../index.html">Home</a></li>
    <li><a href="../../../search_player/player_search.html">Search</a> </li>
    <li><a href="../../../update_player/update.html">Update</a></li>
    <li><a href="../../../insert_player/insert_new_player.html">Insert</a></li>
    <li><a href="../../../database/database.php">Database</a></li>
    </ul>
 </div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "fifa";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$choices = strtoupper($_POST["choices-single-defaul"]);

if($choices=='PERSONAL DETAILS'){
header("Location:test_personal_details/inline-table-edit.php");
}
else  if($choices=='PLAYER EARNINGS'){
    header("Location:test_player_salary/inline-table-edit.php");
}

else  if($choices=='PLAYER POSITION'){
header("Location:test_player_position/inline-table-edit.php");
}

else  if($choices=='PLAYER CLUB'){
header("Location:test_player_club/inline-table-edit.php");
}
else if($choices=='PLAYER STATS'){
header("Location:test_player_stats/inline-table-edit.php");
       
}
else {
     header("Location:index.html");
}
?>
</body>

</html>
