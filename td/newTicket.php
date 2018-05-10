<!DOCTYPE html>
<?php
	session_start();
	if($_SESSION['authenticated'] != true){
		echo "<meta http-equiv=\"refresh\" content=\"0; url=index.htm\" />";
	}
?>
<html>

	<head>
		<link rel="stylesheet" href="css/styles.css" type="text/css" />
		<title>TD Positions</title>
	</head>

<body>

<!-- wrap starts here -->
<div id="wrap">

	<div id="header"><div id="header-content">	
		
		<h1 id="logo"><a href="index.htm" title="">T<span class="green">D</span></a></h1>	
		<h2 id="slogan">Position DB</h2>
	
        <!-- Menu Tabs -->
		<ul>
			<li><a href="viewPositions.php">View Positions</a></li>
			<li><a href="submitNew.php">Create Position</a></li>
		</ul>	
	
	</div></div>
				
	<!-- content-wrap starts here -->
	<div id="content-wrap"><div id="content">
	
	<div id="main">		
		
			<div class="post">
                
				<h3>Submit New</h3>
				<?php
					#Get the submitted content
					$position = $_POST['position_name'];
					$company = $_POST['company_name'];
					$start_date = $_POST['start_date'];
					$end_date = $_POST['end_date'];
					$location = $_POST['location'];
					$description = $_POST['description'];
					$keywords = $_POST['keywords'];
					#fill the values
					$con = new mysqli("localhost","root","password","td_positions","3306","");
					
					//echo "INSERT INTO Ticket (`contact_phone`,`time_recieved`,`ticket_id`,`status`,`contact_name`,`customer_comments`,`company_id`,`issueID`,`employee_id`) 
					//VALUES ('$phone','$time','$ticket_id','open','$contact','$comments','$company_id','D00923442','E00777545');<br>";
					
					$sqlQuery = "INSERT INTO `position`(`position_name`, `company_name`, `start_date`, `end_date`, `location`, `description`) VALUES ('$position','$company','$start_date','$end_date','$location','$description')";
					
					if($result = $con->query($sqlQuery)){
						//success
						echo '<p>Ticket Submitted Successfully.</p>';
					}
					else{
						echo 'Sorry, there was an error adding your entry. Please try again.';
					}
				?>
                
            <form action="ViewPositions.php">
                <input type="submit" value=" View Positions "/>
            </form>
                
			</div>

		<div id="footer">
			<div id="footer-content">
			<div class="col2 float-right">
				<p>&copy; Copyright 2018 <strong>Michael Gosnell</strong></p>	
			</div>
			</div>
		</div>