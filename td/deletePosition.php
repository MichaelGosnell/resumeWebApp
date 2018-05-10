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
                
				<h3>Update</h3>
				<?php
					#Get the submitted content
                    $num = $_POST['num'];
					#fill the values
					$con = new mysqli("localhost","root","password","td_positions","3306","");
					
					$sqlQuery = "DELETE FROM `position` WHERE `position_id`='$num'";
					
					if($result = $con->query($sqlQuery)){
						//success
						echo '<p>Position deleted Successfully.</p>';
					}
					else{
						echo 'Sorry, there was an error deleting your entry. Please try again.';
					}
				?>

            <form action="submitNew.php">
                    <input type="submit" value="Create New"/>
            </form>
            <form action="ViewPositions.php">
                <input type="submit" value="View Positions"/>
            </form>
                
			</div>

		<div id="footer">
			<div id="footer-content">
			<div class="col2 float-right">
				<p>&copy; Copyright 2018 <strong>Michael Gosnell</strong></p>	
			</div>
			</div>
		</div>