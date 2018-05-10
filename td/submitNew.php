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
			<li><a href="submitNew.php" id="current">Create Position</a></li>
		</ul>		
        
	</div></div>
				
	<!-- content-wrap starts here -->
	<div id="content-wrap"><div id="content">		
	
	<div id="main">		
		
			<div class="post">
			
				<h3>Submit New</h3>
				<form action="newTicket.php" method="post">			
					<p>
					
                    <label>Position</label>
                    <input type="text" name="position_name" size="50" ><br>
                    <label>Company</label>
                    <input type="text" name="company_name" size="50" ><br>
                    <label>Start Date</label>
                    <input type="text" name="start_date" size="50" ><br>
                    <label>End Date</label>
                    <input type="text" name="end_date" size="50" ><br>
                    <label>location</label>
                    <input type="text" name="location" size="50" ><br>
                    <label>Description</label>
                    <input type="text" name="description" size="50" ><br>
                    <label>Keywords</label>
                    <textarea rows="5" cols="5" name="keywords"></textarea></br>
					<input class="button" input type="submit" value = "submit"/>
					</p>		
				</form>		
        
			</div>
        
		<div id="footer">
			<div id="footer-content">
			<div class="col2 float-right">
				<p>&copy; Copyright 2018 <strong>Michael Gosnell</strong></p>
			</div>
			</div>
		</div>