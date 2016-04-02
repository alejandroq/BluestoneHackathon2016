<?php 

include '../connection.php';

$sql = "SELECT * FROM Event WHERE event_Begins >= CURDATE() ORDER BY event_Begins ASC LIMIT 3";
$result = $mysqli->query($sql);
if ($result->num_rows > 0)
{
	$return;
	$i = 0;
	while ($rows = $result->fetch_assoc())
	{
		$return .= '<li><i class="fa fa-calendar"></i>&nbsp;' . $rows['event_EventName'] . ' begins at ' . $rows['event_Begins'] . '</li>';
	}
	return print_r($return);
}
