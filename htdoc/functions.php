<?php 

function login()
{
	include '../connection.php';

	if (isset($_POST['submit'])) {
		if (isset($_POST['email']) AND isset($_POST['password'])) {
			$email = $_POST['email'];
			$password = $_POST['password'];

			$sql = "SELECT * FROM User LEFT JOIN Position ON user_PositionID = pos_PositionID LEFT JOIN Organization ON user_OrgID = org_OrgID WHERE user_EmailAddress = '$email' AND user_Password = '$password'";
			$result = $mysqli->query($sql);
			if ($result->num_rows > 0) {
				$loggedIn = 1;
				while ($rows = $result->fetch_assoc()) {
					$_SESSION['email'] = $email;
					$_SESSION['pos_PositionTitle'] = $rows['pos_PositionTitle'];
					$_SESSION['user_FirstName'] = $rows['user_FirstName'];
					$_SESSION['org_Name'] = $rows['org_Name'];

					print_r($_SESSION);
				}
				echo '<script>
						window.location = "index.php";
					</script>';
			} else {
					echo '<div class="alert alert-danger">Invalid Login Credentials</div>';
					session_destroy();
				}	
		} 
	}
}
	
?>
