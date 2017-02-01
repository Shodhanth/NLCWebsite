<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Welcome to Contestant page</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
		<center><h2>Welcome to the page</h2></center>
		<div class="container">
			
			<div class="row">
				<div class="col-md-8 col-sm-6 col-xs-4">
				<div style="padding: 20px; border: 1px solid #999">


					<h2>Upload PDF File :</h2>
					<form enctype="multipart/form-data"
						action="confirm.php" method="post">
					<p><input type="hidden" name="MAX_FILE_SIZE" value="200000" /> <input
						type="file" name="pdfFile" /><br />
					<br />
					<input type="submit" value="upload!" /></p>
					</form>

				</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-8">
				<h3>User Details</h3>
					<h5>
					<?php 
						session_start();
						$user = 'root';
						$pwd = '';
					  	$host = '127.0.0.1';
					  	$db_name = 'nlc';
					  	$conn = new mysqli($host, $user, $pwd, $db_name);
					  	$username = $_SESSION["username"];
					  	$sql = "SELECT username, email, projn,colg FROM userreg WHERE username = '$username'";
					  	$result = $conn->query($sql);

					  	if ($result->num_rows > 0) {
					    // output data of each row
						    while($row = $result->fetch_assoc()) {
						        echo "UserName: " . $row["username"]. "<br>" . "<br>" . "Email: " .  $row["email"]. "<br>" . "<br>" . " Project Name: " . $row["projn"]. "<br>" . "<br>" . " College Name: " . $row["colg"] . "<br>";
						    }
						}
					 ?>
					 </h5>
				</div>
			</div>
		</div>
	</div>
</body>
</html>


