<?php	
include('db-connect.php');
$row1 = mysqli_query($con,"SELECT * FROM personal_details");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="jquery.tabledit.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link href="css/menu.css" rel="stylesheet">
<script type="text/javascript">

$(document).ready(function(){
	
$('#example1').Tabledit({
    url: 'logic-edit-delete.php',
    columns: {
        identifier: [0, 'player_id'],
        editable: [[1, 'player_name'], [2, 'age'],[3, 'overall_rating'],[4, 'nationality']]
    },
    onDraw: function() {
        console.log('onDraw()');
    },
    onSuccess: function(data, textStatus, jqXHR) {
        console.log('onSuccess(data, textStatus, jqXHR)');
        console.log(data);
        console.log(textStatus);
        console.log(jqXHR);
    },
    onFail: function(jqXHR, textStatus, errorThrown) {
        console.log('onFail(jqXHR, textStatus, errorThrown)');
        console.log(jqXHR);
        console.log(textStatus);
        console.log(errorThrown);
    },
    onAlways: function() {
        console.log('onAlways()');
    },
    onAjax: function(action, serialize) {
        console.log('onAjax(action, serialize)');
        console.log(action);
        console.log(serialize);
    }
	});


});

</script>
<style>

table{
  
   background-image: radial-gradient(circle, #26cff2, #00a5e5, #007ad3, #004db6, #13188b);
}
.tbl-header{
  background-color: linear-gradient(to right, #25c481, #25b7c4);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: center;
    border-bottom: 1px solid black;
  font-weight: 800;
  font-size: 12px;
  color: black;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: center;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: black;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}
    .input_style{
        background: linear-gradient(to right, #25c481, #25b7c4);
        border-radius: 24px;
        padding: 10px;
        margin-left: 92%;
        font-family: cursive;
        font-weight: 800;
        margin-bottom: 10px;
        
    }   

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background-image: linear-gradient(to left, #051937, #004d7a, #008793, #00bf72, #a8eb12);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}


</style>

</head>
<body>
<div>
      <ul class='menu'>
    <li><a href="../../../../index.html">Home</a></li>
    <li><a href="../../../../search_player/player_search.html">Search</a> </li>
    <li><a href="../../../../update_player/update.html">Update</a></li>
    <li><a href="../../../../insert_player/insert_new_player.html">Insert</a></li>
    <li><a href="../../../../database/database.php">Database</a></li>
    </ul>
    </div>
	<br>
	<br>
	<br>
 <input TYPE="button" onClick="history.go(0)" VALUE="Refresh" class="input_style">
 <div class="panel panel-default">       
        <div class="tbl-header"> 
        <table cellpadding="0" cellspacing="0" border="0" id="example1">
            <tr><th>Id</th><th>Name</th><th>Age</th><th>Overall Rating</th><th>Nationality</th></tr>
    	<?php while($row = mysqli_fetch_assoc($row1)) {?>
    	<tr>
    		<td><?php echo $row['player_id'];?></td>
    		<td><?php echo $row['player_name']; ?></td>
    		<td><?php echo $row['age']; ?></td>
            <td><?php echo $row['overall_rating']; ?></td>
            <td><?php echo $row['nationality']; ?></td>
    	</tr>
    	<?php } ?>
        </table>
        </div>
    </div>
   
         <script href="js/index.js" type="text/javascript"></script>

</body>
</html>