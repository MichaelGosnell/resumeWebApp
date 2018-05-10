<!DOCTYPE html>
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
		<h2 id="slogan">Position DB</h2>	\
        
		<!-- Menu Tabs -->
		<ul>
			<li><a href="viewPositions.php" id="current">View Positions</a></li>
			<li><a href="submitNew.php">Create Position</a></li>
		</ul>		
	
	</div>
	
	</div></div>
				
	<!-- content-wrap starts here -->
	<div id="content-wrap"><div id="content">		
	
	<div id="main">		
		
			<div class="post" align = "center">
			
				<h3>Positions</h3>
                
                <!-- build the table, to avoid values outside of table -->
                <table style="width:96%">
                <tr>
                <td><h4>#</h4></td>
                <td><h4>Postion</h4></td>
                <td><h4>Company</h4></td>
                <td><h4>Start Date</h4></td>
                <td><h4>End Date</h4></td>
                <td><h4>Location</h4></td>
                <td><h4>Description</h4></td>
                <td><h4>Keywords</h4></td>
                </tr>
                
					<?php
    
                        #fill the values
                    
				        $con = new mysqli("localhost","root","password","td_positions","3306","");
                        $sqlQuery2 = "SELECT * FROM `position`;";
                        if($result = $con->query($sqlQuery2)){
                            #$info = mysqli_fetch_field($result)
                            echo '<td>';
                            while($row = $result->fetch_assoc()){
                                echo '<tr><td>';
                                printf("<a href=\"viewPosition.php?link=%s\">%s</a><td>",$row['position_id'],$row['position_id']);
                                printf("<a href=\"viewPosition.php?link=%s\">%s</a><td>",$row['position_id'],$row['position_name']);
                                echo $row['company_name'] . "<td>";
                                echo $row['start_date'] . "<td>";
                                echo $row['end_date'] . "<td>";
                                echo $row['location'] . "<td>";
                                echo $row['description'] . '</td> </tr>';
                            }
                            $result->close();
                            echo '</td></table>';
                        }
                
						if($_SERVER['REQUEST_METHOD'] == 'POST'){
							$pass = sha1($_POST['password']);
							$sqlQuery = "SELECT * FROM tbl_users WHERE username = '" . $_POST['username'] . "' and password = '" . $pass . "'";
							
							if($result1 = $con->query($sqlQuery)){
								if($result1->num_rows > 0){
									session_start();
									$_SESSION['authenticated'] = true;
                                }
								
                                else{
									echo 'Sorry username or password are not valid. User not found.';
								}
								$result->close();
							}
							else{
								echo 'Sorry username or password are not valid. Result not successful.';
							}
						}
                        
                            
                        
                        if($_SESSION['authenticated'] != true){
		                  //echo "<meta http-equiv=\"refresh\" content=\"0; url=index.htm\" />";
	                    }
                    
                
					?>
			
					<!--<h3><img src="media/ITTLogo.jpg" alt="logo" style="width:304px;height:228px;"></h3> -->
                
			</div>
				
			</div>

		<div id="footer">
			<div id="footer-content">
			<div class="col2 float-right">
				<p>&copy; Copyright 2018 <strong>Michael Gosnell</strong></p>
			</div>
			</div>
		</div>