<?php 

function login()
{
	include '../connection.php';

	if (isset($_POST['submit'])) {
		if (isset($_POST['email']) AND isset($_POST['password'])) {
			$email = $_POST['email'];
			$password = $_POST['password'];

			$sql = "SELECT * FROM User LEFT JOIN Position ON user_PositionID = pos_PositionID LEFT JOIN Organization ON user_OrgID = org_OrgID WHERE user_EmailAddress = '$email' AND user_Password = '$password'";
			print_r($sql);
			$result = $mysqli->query($sql);
			print_r($result->num_rows);
			if ($result->num_rows > 0) {
				$loggedIn = 1;
				$_SESSION['email'] = $email;
				while ($row = mysql_fetch_assoc($result)) {
					$role = $row['pos_PositionTitle'];
					$_SESSION['$pos_PositionTitle'];
					$_SESSION['$org_Name'];
					print_r($_SESSION);
				}
			} else {
					echo '<div class="alert alert-danger">Invalid Login Credentials</div>'; 
				}	
		} 
	}
}

	
?>
