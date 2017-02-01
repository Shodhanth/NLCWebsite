<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>NLC | LTCOE presents NLC</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./css/jquery.fullPage.css" />
	<link rel="stylesheet" type="text/css" href="./css/examples.css" />
    <link rel="stylesheet" type="text/css" href="./css/main.css" />
	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript" src="./js/jquery.fullPage.min.js"></script>
	<script type="text/javascript" src="./js/examples.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				'verticalCentered': false,
				navigation: true
			});
		});
	</script>
	<script type="text/javascript">
		function scrollToElement(){
			document.getElementById('section2').scrollIntoView();
		}
	</script>
</head>
<body>
<div id="fullpage">
	<div class="section " id="section0">  <!-- FIRST FULL PAGE -->
        <div class="container" id="section0-block">
        	<h3>LTCOE Presents</h3><br>
	        <h1> NLC </h1><br>
	        <h3>National Level Conference</h3><br><br>
        </div>
    </div> <!-- END FIRST FULL PAGE -->

	<div class="section" id="section1"> <!-- SECOND FULL PAGE -->
	    <div class="slide" id="slide1">
	    	<h1>Announcements</h1>
	    	<div class="container">
		    	<table class="table table-striped">
		    		<thead>
		    			<tr>
		    				<th><center><h3>Sr No.</h3></center></th>
		    				<th><center><h3>Announcement</h3></center></th>
		    				<th><center><h3>Date</h3></center></th>
		    			</tr>
		    		</thead>
		    		<tbody>
		    			<?php 
		    				$user = 'root';
					        $pwd = 'computer';
					        $host = '127.0.0.1';
					        $db_name = 'nlc';
					        $conn = new mysqli($host, $user, $pwd, $db_name);

					        $sql = "SELECT * from annouce ORDER BY Created DESC";
					        $result = $conn->query($sql);

					        if( $result->num_rows > 0) {
		            			while($row = $result->fetch_assoc()) {
		            				// if($row['Published'] != 0){
		    			?>
		    			<tr>
		    				<td><?php echo $row['SrNo']; ?></td>
		    				<td><?php echo $row['Annoucement']; ?></td>
		    				<td><?php echo $row['Created']; ?></td>
		    			</tr>
		    			<?php }} /*}*/ ?>
		    		</tbody>
		    	</table>
		    </div>
	    </div>

	    <div class="slide" id="slide2">
	    	<h1>Important Dates</h1>
	    </div>
	</div> <!-- END SECOND FULL PAGE -->

	<div class="section" id="section2"> <!-- THIRD FULL PAGE -->
	<div class="slide" id="slide3">
		<h2>Participant Login</h2><br><br>
	    <div class="row">
	    	<div class="col-xs-6 col-sm-4"></div> 
	    	<div class="col-xs-6 col-sm-4">  
		        <form action="auth.php" method="post" role="form">
		        	<div class="form-group">
		        		<label for="usr">Username: </label>
						<input class="form-control" type="text" id="usr" name="username">
					<div class="form-group">
						<label for="passwa">Password</label>
						<input class="form-control" type="password" id="passwa" name="password">
					</div>
					<button type="submit" class="btn btn-warning">Login</button>
		        	</div>
		        	
		        	
		        </form><br>
		    </div>
		    <div class="col-xs-6 col-sm-4"></div> 
	    </div>
	    </div>
	    <div class="slide" id="slide4">
	    	<h1>Registration</h1>
	    	<div class="row">
	    	<div class="col-xs-6 col-sm-4"></div>
	    	<div class="col-xs-6 col-sm-4">  
	    	<form action="register.php" method="post" role="form">
		        	<div class="form-group">
		        		<label for="emailreg">Email</label>
		        		<input class="form-control" type="Email" id="emailreg" name="emailreg" required>
		        	</div>
		        	<div class="form-group">
		        		<label for="collegenamereg">College Name</label>
		        		<input class="form-control" type="text" id="collegenamereg" name="clgnamereg" required>
		        	</div>
		        	<div class="form-group">
		        		<label for="phonenoreg">Phone Number</label>
		        		<input class="form-control" type="tel" id="phonenoreg" name="phnoreg" maxlength="10" required>
		        	</div>
		        	<div class="form-group">
		        		<label for="projectreg">Project Name</label>
		        		<input class="form-control" type="text" id="projectreg" name="pjtnamereg" required>
		        	</div>
					<div class="form-group">
		        		<label for="userreg">Username</label>
		        		<input class="form-control" type="text" id="userreg" name="usernamereg" required>
		        	</div>
		        	<div class="form-group">
		        		<label for="passreg">Password</label>
		        		<input class="form-control" type="password" id="passreg" name="passreg" required>
		        	</div>

					<button type="submit" class="btn btn-primary">Login</button>
					</form>
					</div>
					<div class="col-xs-6 col-sm-4"></div>
					</div>
		    </div>
	    </div>
    </div> <!-- END THIRD FULL PAGE -->
    <
    <div class="section" id="section3"> <!-- FOURTH FULL PAGE -->
        <h1>Contact Us here</h1>
    </div> <!-- END FOURTH FULL PAGE -->
</div>

<div id="infoMenu">
	<ul>
	    <li class="page-scroll"><a onclick="scrollToElement()">Login</a></li>
		<li><a href="assets/pdf/rules.pdf" download="Rules.pdf" >Download Rules</a></li>
		<li><a href="#">Documentation</a></li>
		<li >Contact</a></li>
	</ul>
</div>

</body>
</html>
