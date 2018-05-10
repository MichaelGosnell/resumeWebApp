<!DOCTYPE html>
<?php
	session_start();
	if($_SESSION['authenticated'] != true){
		echo "<meta http-equiv=\"refresh\" content=\"0; url=index.html\" />";
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
                
                <h3 id="title_header">Ticket #</h3>
				<form action="updatePosition.php" method="post">			
					<p>
					<input id= "num" name="num" type="hidden">
                    <label>Position</label>
                    <input id = "position" type="text" name="position_name" size="50" ><br>
                    <label>Company</label>
                    <input id = "company" type="text" name="company_name" size="50" ><br>
                    <label>Start Date</label>
                    <input id = "start" type="text" name="start_date" size="50" ><br>
                    <label>End Date</label>
                    <input id = "end" type="text" name="end_date" size="50" ><br>
                    <label>location</label>
                    <input id = "location" type="text" name="location" size="50" ><br>
                    <label>Description</label>
                    <input id = "description" type="text" name="description" size="50" ><br>
                    <label>Keywords</label>
                    <textarea rows="5" cols="5" name="keywords"></textarea></br>
					<input class="button" input type="submit" value = "Update"/>
					</p>		
				</form>		
        
                <form action="deletePosition.php" method="post">
                    <input id= "num2" name="num" type="hidden">
                    <input type="submit" value="Delete Position"/>
                </form>
        
                
                
				<?php
									
					//echo "<h3>Ticket #" . $_GET['link'] . "</h3>";
									
  					#fill the values
                    $con = new mysqli("localhost","root","password","td_positions","3306","");
                    $sqlQuery2 = "SELECT * FROM position WHERE position_id = " . $_GET['link'] . ";";
                    if($result = $con->query($sqlQuery2)){
                        #$info = mysqli_fetch_field($result)
                        $row = $result->fetch_assoc();
                        //echo $row['position_name'];
                        
                        echo "
                            <script type=\"text/javascript\">
                                document.getElementById('title_header').innerText = 'Ticket #" . $_GET['link'] . "';
                                document.getElementById('num').defaultValue = '" . $_GET['link'] . "';
                                document.getElementById('num2').defaultValue = '" . $_GET['link'] . "';
                                document.getElementById('position').defaultValue = '" . $row['position_name'] . "';
                                document.getElementById('company').defaultValue = '" . $row['company_name'] . "';
                                document.getElementById('start').defaultValue = '" . $row['start_date'] . "';
                                document.getElementById('end').defaultValue = '" . $row['end_date'] . "';
                                document.getElementById('location').defaultValue = '" . $row['location'] . "';
                                document.getElementById('description').defaultValue = '" . $row['description'] . "';
                            </script>
                        ";
        
                    $result->close();
                    }
        
				?>	
				
			</div>

		<div id="footer">
			<div id="footer-content">
			<div class="col2 float-right">
				<p>&copy; Copyright 2018 <strong>Michael Gosnell</strong></p>	
			</div>
			</div>
		</div>