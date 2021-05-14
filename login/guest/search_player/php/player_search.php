<html>
<head>
<meta charset="UTF-8">
<title>Player Search Results</title>
<link rel="stylesheet" href="css/table.css">
<link rel="stylesheet" href="css/index.css">
</head>
<body>

<div >   <ul class='header'>
    <li><a href="../../../home.html">Home</a></li>
    <li><a href="../../search_player/player_search.html">Search</a> </li>
    <li><a href="../../database/database.php">Database</a></li>
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

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 
$choices = $_POST['choices-single-defaul'];
$choices= strtoupper($choices);
$input_name = $_POST['input_search_keyword'];
if ($choices == 'AGE' && ctype_digit(strval($input_name))) {
$sql = "SELECT player_name,age,nationality,overall_rating FROM personal_details pd WHERE pd.age=\"$input_name\"";
?>
 <div class="tbl-header">
<table cellpadding="0" cellspacing="0" border="0"><thead>
<tr>
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
<tbody>
<?php
$result = $conn->query($sql);
if ($result) {
// output data of each row
while($row = $result->fetch_assoc()) { 
echo "<tr>";
echo("<td>" . $row["player_name"] . "</td> <td>" . $row["age"] . "</td> <td>" . $row["overall_rating"] . "</td><td>" .$row["nationality"]. "</td>");
echo "</tr>";
}
if(mysqli_num_rows($result)==0)
	header("location:index2.html");
} 
}

else if ($choices == 'NATIONALITY' && !ctype_digit(strval($input_name))) {
$sql = "SELECT * FROM personal_details WHERE nationality=\"$input_name\"";
?>
</tbody>
</table>
</div>
 <div class="tbl-header">
<table cellpadding="0" cellspacing="0" border="0"><thead>
<tr>
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
<tbody>
<?php
$result = $conn->query($sql);
if ($result) {
// output data of each row
while($row = $result->fetch_assoc()) { 
echo "<tr>";
echo("<td>" . $row["player_name"] . "</td> <td>" . $row["age"] . "</td> <td>" . $row["overall_rating"] . "</td><td>" .$row["nationality"]. "</td>");
echo "</tr>";
}
if(mysqli_num_rows($result)==0)
	header("location:index2.html");

} 

}
else if ($choices == 'OVERALL RATING' && ctype_digit(strval($input_name))) {
$sql = "SELECT * FROM personal_details WHERE overall_rating=\"$input_name\"";
?>
</tbody>
</table>
</div>
 <div class="tbl-header">
<table cellpadding="0" cellspacing="0" border="0"><thead>
<tr>
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
<tbody>
<?php
$result = $conn->query($sql);
if ($result) {
// output data of each row
while($row = $result->fetch_assoc()) { 
echo "<tr>";
echo("<td>" . $row["player_name"] . "</td> <td>" . $row["age"] . "</td> <td>" . $row["overall_rating"] . "</td><td>" .$row["nationality"]. "</td>");
echo "</tr>";
}
if(mysqli_num_rows($result)==0)
	header("location:index2.html");

} 

}
else if ($choices == 'PLAYER ID' && ctype_digit(strval($input_name))) {
$sql = "SELECT * FROM personal_details WHERE player_id=\"$input_name\"";
?>
</tbody>
</table>
</div>
 <div class="tbl-header">
<table cellpadding="0" cellspacing="0" border="0"><thead>
<tr>
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
<tbody>
<?php
$result = $conn->query($sql);
if ($result) {
// output data of each row
while($row = $result->fetch_assoc()) { 
echo "<tr>";
echo("<td>" . $row["player_name"] . "</td> <td>" . $row["age"] . "</td> <td>" . $row["overall_rating"] . "</td><td>" .$row["nationality"]. "</td>");
echo "</tr>";
}
if(mysqli_num_rows($result)==0)
	header("location:index2.html");

} 

}
else if ($choices == 'PLAYER NAME' && !ctype_digit(strval($input_name))) {
$sql = "SELECT * FROM personal_details WHERE player_name LIKE \"%$input_name%\"";
?>
</tbody>
</table>
</div>
 <div class="tbl-header">
<table cellpadding="0" cellspacing="0" border="0"><thead>
<tr>
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
<tbody>
<?php
$result = $conn->query($sql);
if ($result) {
// output data of each row
while($row = $result->fetch_assoc()) { 
echo "<tr>";
echo("<td>" . $row["player_name"] . "</td> <td>" . $row["age"] . "</td> <td>" . $row["overall_rating"] . "</td><td>" .$row["nationality"]. "</td>");
echo "</tr>";
}

if(mysqli_num_rows($result)==0)
	header("location:index2.html");
} 

}
else if ($choices == 'TEAM' && !ctype_digit(strval($input_name))) {
$sql = "SELECT pd.player_name,pd.overall_rating,pd.age,pd.nationality,od.club FROM personal_details pd,other_details od WHERE od.club = \"$input_name\" AND pd.player_id = od.player_id ORDER BY pd.player_id";
?>
</tbody>
</table>
</div>
 <div class="tbl-header">
<table cellpadding="0" cellspacing="0" border="0"><thead>
<tr>
    <th>NAME</th>
     <th>AGE</th>
     <th>OVERALL RATING</th>
    <th>NATIONALITY</th>
    <th>TEAM</th>
</tr> 
</thead>    

</table>  
</div>
<div class="tbl-content">
<table cellpadding="0" cellspacing="0" border="0">
<tbody>
<?php
$result = $conn->query($sql);
if ($result) {
// output data of each row
while($row = $result->fetch_assoc()) { 
echo "<tr>";
echo("<td>" . $row["player_name"] . "</td> <td>" . $row["age"] . "</td> <td>" . $row["overall_rating"] . "</td><td>" .$row["nationality"]. "</td><td>" . $row["club"] . "</td>");
echo "</tr>";
}
if(mysqli_num_rows($result)==0)
	header("location:index2.html");

} 

}
else if ($choices == 'PLAYING POSITION' && !ctype_digit(strval($input_name))) {
$sql = "SELECT pd.player_name, pd.overall_rating, od.preferred_position, p.gk, p.df, p.cm, p.fr FROM personal_details pd, other_details od, position p WHERE od.preferred_position LIKE \"$input_name\" AND p.player_id = od.player_id AND p.player_id = pd.player_id GROUP BY pd.player_id";
?>
</tbody>
</table>
</div>
 <div class="tbl-header">
<table cellpadding="0" cellspacing="0" border="0"><thead>
<tr>
    <th>NAME</th>
    <th>PLAYING POSITION</th>
    <th>OVERALL RATING</th>
    <th colspan="4">RATING AT OTHER POSITIONS</th>
</tr>
<tr>
    <th></th>
    <th></th>
    <th></th>
    <th>GOALKEEPER</th>
    <th>DEFENDER</th>
    <th>CENTER-MID</th>
    <th>FORWARD</th>
</tr>
</thead>    
</table>  
</div>
<div class="tbl-content">
<table cellpadding="0" cellspacing="0" border="0">
<tbody>
<?php
$result = $conn->query($sql);
if ($result) {
// output data of each row
while($row = $result->fetch_assoc()) { 
echo "<tr>";
echo("<td>" . $row["player_name"] . "</td> <td>" . $row["preferred_position"] . "</td> <td>" . $row["overall_rating"] . "</td><td>" .$row["gk"]. "</td><td>" . $row["df"] . "</td><td>" . $row["cm"] . "</td><td>" . $row["fr"] . "</td>");
echo "</tr>";
}
if(mysqli_num_rows($result)==0)
	header("location:index2.html");

} 
} 
else {
header("Location:index.html");

}

$conn->close();
?> </tbody>
</table>
</div>
</body>
</html>