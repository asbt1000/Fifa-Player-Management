<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Database</title>
   <link rel="stylesheet" href="css/index.css">
   <link rel="stylesheet" href="css/table.css">  
   
</head>

<body style="background-image: linear-gradient(to right top, #1600ff, #9300a5, #930061, #751039, #4c2e2e);">
    <div >     
    <ul class='header'>
    <li><a href="../index.html">Home</a></li>
    <li><a href="../search_player/player_search.html">Search</a> </li>
    <li><a href="../update_player/update.html">Update</a></li>
    <li><a href="../insert_player/insert_new_player.html">Insert</a></li>
    <li><a href="../database/database.php">Database</a></li>
    </ul>
 </div>  

	<br>
    <br>
    <br>	
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fifa";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 
?><center>
  <h1>PERSONAL DETAILS</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>PLAYER ID</th>
          <th>NAME</th>
          <th>AGE</th>
          <th>OVERALL RATING</th>
          <th>NATIONALITY</th>
        </tr>
      </thead>
    </table>
  </div>
<div class="tbl-content">
<table cellpadding="0" cellspacing="0" border="0">
<!--<tbody>-->
<?php
$sql = "SELECT * FROM personal_details ORDER BY id";
$result = $conn->query($sql);
if ($result->num_rows >0 ) {
    while($row = $result->fetch_assoc()) { 
        echo "<tbody>";
        echo "<tr>";
         echo "<td>" .$row["player_id"]. "</td>";
          echo "<td>" .$row["player_name"]. "</td>";
          echo "<td>" .$row["age"]. "</td>";
         echo "<td>" .$row["overall_rating"]. "</td>";
          echo "<td>" .$row["nationality"]. "</td>";
         echo "</tr>";
        echo "</tbody>";
    }
}else {
     echo "0 results";
 }    
?>
<!-- </tbody>-->
</table>
</div><br>

  <h1>PLAYER POSITIONS</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>PLAYER ID</th>
          <th>GOALKEEPER</th>
          <th>DEFENDER</th>
          <th>CENTRAL-MID</th>
          <th>FORWARD</th>
        </tr>
      </thead>
    </table>
  </div>
<div class="tbl-content">
<table cellpadding="0" cellspacing="0" border="0">
<!--<tbody>-->
<?php
$sql = "SELECT * FROM position ORDER BY id";
$result = $conn->query($sql);
if ($result->num_rows >0 ) {
    while($row = $result->fetch_assoc()) { 
        echo "<tbody>";
        echo "<tr>";
         echo "<td>" .$row["player_id"]. "</td>";
          echo "<td>" .$row["gk"]. "</td>";
          echo "<td>" .$row["df"]. "</td>";
         echo "<td>" .$row["cm"]. "</td>";
          echo "<td>" .$row["fr"]. "</td>";
         echo "</tr>";
        echo "</tbody>";
    }
}else {
     echo "0 results";
 }    
?>
<!-- </tbody>-->
</table>
</div><br>
      
  <h1>PLAYER EARNINGS</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>PLAYER ID</th>
          <th>WAGE</th>
          <th>VALUE</th>
        </tr>
      </thead>
    </table>
  </div>
<div class="tbl-content">
<table cellpadding="0" cellspacing="0" border="0">
<!--<tbody>-->
<?php
$sql = "SELECT * FROM salary ORDER BY id";
$result = $conn->query($sql);
if ($result->num_rows >0 ) {
    while($row = $result->fetch_assoc()) { 
        echo "<tbody>";
        echo "<tr>";
         echo "<td>" .$row["player_id"]. "</td>";
          echo "<td>" .$row["wage"]. "</td>";
          echo "<td>" .$row["value"]. "</td>";
         echo "</tr>";
        echo "</tbody>";
    }
}else {
     echo "0 results";
 }    
?>
<!-- </tbody>-->
</table>
</div><br>
        <h1>PLAYER STATS</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>PLAYER ID</th>
        <th>ACCELERA TION</th>
            <th>BALANCE</th>
            <th>BALL CONTROL</th>
            <th>CROSSING</th>
            <th>CURVE</th>
            <th>DRIBBLING</th>
            <th>FINISHING</th>
            <th>GK KICKING</th>
            <th>GK POSITIONING</th>
            <th>PENALTIES</th>
            <th>SHORT PASS</th>
            <th>STAMINA</th>
            <th>STRENGTH</th>
        </tr>
      </thead>
    </table>
  </div>
<div class="tbl-content">
<table cellpadding="0" cellspacing="0" border="0">
<!--<tbody>-->
<?php
$sql = "SELECT * FROM player_stats ORDER BY id";
$result = $conn->query($sql);
if ($result->num_rows >0 ) {
    while($row = $result->fetch_assoc()) { 
        echo "<tbody>";
        echo "<tr>";
         echo "<td>" .$row["player_id"]. "</td>";
        echo "<td>" .$row["acceleration"]. "</td>";
          echo "<td>" .$row["balance"]. "</td>";
         echo "<td>" .$row["ball_control"]. "</td>";
         echo "<td>" .$row["crossing"]. "</td>";
         echo "<td>" .$row["curve"]. "</td>";
         echo "<td>" .$row["dribbling"]. "</td>";
         echo "<td>" .$row["finishing"]. "</td>";
         echo "<td>" .$row["gk_kicking"]. "</td>";
         echo "<td>" .$row["gk_positioning"]. "</td>";
         echo "<td>" .$row["penalties"]. "</td>";
         echo "<td>" .$row["short_pass"]. "</td>";
         echo "<td>" .$row["stamina"]. "</td>";
         echo "<td>" .$row["strength"]. "</td>";
         echo "</tr>";
        echo "</tbody>";
    }
}else {
     echo "0 results";
 }    
?>
<!-- </tbody>-->
</table>
</div><br>
            
  <h1>PLAYER CLUB</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>PLAYER ID</th>
          <th>CLUB</th>
          <th>PREFERRED POSITION</th>
        </tr>
      </thead>
    </table>
  </div>
<div class="tbl-content">
<table cellpadding="0" cellspacing="0" border="0">
<!--<tbody>-->
<?php
$sql = "SELECT * FROM other_details ORDER BY id";
$result = $conn->query($sql);
if ($result->num_rows >0 ) {
    while($row = $result->fetch_assoc()) { 
        echo "<tbody>";
        echo "<tr>";
         echo "<td>" .$row["player_id"]. "</td>";
          echo "<td>" .$row["club"]. "</td>";
          echo "<td>" .$row["preferred_position"]. "</td>";
         echo "</tr>";
        echo "</tbody>";
    }
}else {
     echo "0 results";
 }  
 
$conn-> close();
?>

<!-- </tbody>-->
</table>
</div>
</center>
</body>

</html>
