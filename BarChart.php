<?php
require 'server.php';
$username=$_SESSION['username'];
header('Content-Type: application/json');
$sqlQuery = "SELECT SUM(revenue) as revenue,SUBSTR(date,1,4) as year
						FROM sales
						WHERE users_username='$username'
						GROUP BY year ASC";
$result = mysqli_query($db,$sqlQuery);
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}
mysqli_close($db);
echo json_encode($data);
?>
