<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title>Admin Dashboard</title>
</head>
<body>
	<button class="btn btn-warning">Logout</button>
	<div class="container-fluid">
		<center>
		<?php
			session_start();
			if(!isset($_SESSION['secret'])){
				echo "Please Login First";
			}
			else if( isset($_SESSION['secret']) && $_SESSION['secret'] == 'cookie' ){
				echo "Valid Login";
			} 
		?>
		</center>
	</div>
	<div class="row">
		<div class="col-xs-6 col-sm-4"></div> 
		<div class="col-xs-6 col-sm-4">  
			<center>
				<h1>Dashboard</h1>
			</center>
		</div>
		<div class="col-xs-6 col-sm-4"></div>
	</div>
	<hr>
	<div class="container">
		<h2>Active Annoucements</h2>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Sr No.</th>
					<th>Annoucement</th>
					<th>Created</th>
					<th>Author</th>
					<th>Edits</th>	
				</tr>
			</thead>
			<tbody>
				<?php

					if(isset($_SESSION['secret']) && isset($_SESSION['usr'])){
					$user = 'root';
			        $pwd = '';
			        $host = '127.0.0.1';
			        $db_name = 'nlc';
			        $conn = new mysqli($host, $user, $pwd, $db_name);

			        $sql = "SELECT * from annouce";
			        $result = $conn->query($sql);

			        if( $result->num_rows > 0) {
            			while($row = $result->fetch_assoc()) {
            				if($row['Published'] != 0){
				?>
					<tr>
						<td><?php echo $row['SrNo']; ?></td>
						<td><?php echo $row['Annoucement']; ?></td>
						<td><?php echo $row['Created']; ?></td>
						<td><?php echo $row['Author']; ?></td>
						<td><a id="<?php echo $row['SrNo']; ?>" class="btn btn-warning">Edit</a> <a class="btn btn-danger">Delete</a></td>
					</tr>
				<?php }}}} ?>
			</tbody>
		</table>
		<br><br>
		<h2>Pending Announcements</h2>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Sr No.</th>
					<th>Annoucement</th>
					<th>Created</th>
					<th>Author</th>
					<th>Edits</th>
				</tr>
			</thead>
			<tbody>
				<?php
				if(isset($_SESSION['secret']) && isset($_SESSION['usr'])){
					$sql = "SELECT * from annouce";
			        $result = $conn->query($sql);

			        if( $result->num_rows > 0) {
            			while($row = $result->fetch_assoc()) {
            				if($row['Published'] == 0){
				?>
					<tr>
						<td><?php echo $row['SrNo']; ?></td>
						<td><?php echo $row['Annoucement']; ?></td>
						<td><?php echo $row['Created']; ?></td>
						<td><?php echo $row['Author']; ?></td>
						<td><a id="<?php echo $row['SrNo']; ?>" class="btn btn-warning">Publish</a> <a class="btn btn-danger">Delete</a></td>
					</tr>
				<?php }}}} ?>
			</tbody>
		</table>
	</div>
	
</body>
</html>