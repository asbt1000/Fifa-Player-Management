<?php

include('db-connect.php');

$input = filter_input_array(INPUT_POST);

if ($input['action'] === 'edit') 
{	
	$sql = "UPDATE personal_details SET player_name ='" . $input['player_name'] . "',age ='" . $input['age'] . "',overall_rating ='" . $input['overall_rating'] . "', nationality='" . $input['nationality'] . "'" ." WHERE player_id='" . $input['player_id'] . "'";
	
    mysqli_query($con,$sql);
} 
if ($input['action'] === 'delete') 
{
    mysqli_query($con,"DELETE FROM personal_details   WHERE player_id='" . $input['player_id'] . "'");
} 


mysqli_close($mysqli);

echo json_encode($input);
?>
