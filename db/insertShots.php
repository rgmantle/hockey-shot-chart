  
<?php

	require('../includes/mysqli_connect.php');
	
	$season_id = $_REQUEST['season_id'];
	$game_no = $_REQUEST['game_no'];
	$user_id = $_REQUEST['user_id'];
	$assist1 = $_REQUEST['assist1'];
	$assist2 = $_REQUEST['assist2'];
	$shot_type = $_REQUEST['shot_type'];
	$result = $_REQUEST['result'];
	$status = $_REQUEST['gameStatus'];
	$period = $_REQUEST['period'];
	$time = $_REQUEST['time'];
	$x_axis = $_REQUEST['x_axis'];
	$y_axis = $_REQUEST['y_axis'];

	
	$sql = "INSERT INTO shot_chart (season_id, game_no, user_id, assist1, assist2, shot_type, result, status, period, time, x_axis, y_axis) VALUES
    ('$season_id','$game_no','$user_id','$assist1','$assist2','$shot_type','$result','$status','$period','$time','$x_axis','$y_axis')";
    
    if ($dbc->query($sql) === TRUE) {
        echo "record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $dbc->error;
    }
    
    mysqli_close($dbc);

?>

