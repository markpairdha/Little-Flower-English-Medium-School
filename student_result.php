<?php
	include"database.php";
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Little Flower E.M School</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<?php include"navbar.php";?><br>
			<div id="section">

				<div class="content">

					<h3>Greetings from Little Flower English Medium School,You can view your ward results here :)</h3><br>
					<form  method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					<div class="lbox1">

						<label>Enter Your Ward Registration Number</label><br>
						<input type="text" class="input3" name="rno"><br><br>
					</div>

					<button type="submit" class="btn" name="view"> View Details</button>

					</form>
					<br><br>
					<div class="Output">
						<?php
							if(isset($_POST["view"]))
							{
								echo "<h3>Mark Details</h3><br>";
								$sql="select * from mark where REGNO='{$_POST["rno"]}'";
								$re=$db->query($sql);
								if($re->num_rows>0)
								{
									echo'
									<table border="1px">
										<tr>
											<th>S.No</th>
											<th>Reg.No</th>
											<th>Class</th>
											<th>Term</th>
											<th>Subject</th>
											<th>Mark</th>
										</tr>
									';
									$i=0;
									while($r=$re->fetch_assoc())
									{
										$i++;
										echo "
											<tr>
												<td>{$i}</td>
												<td>{$r["REGNO"]}</td>
												<td>{$r["CLASS"]}</td>
												<td>{$r["TERM"]}</td>
												<td>{$r["SUB"]}</td>
												<td>{$r["MARK"]}</td>
											</tr>




										";
									}
								}
								else
								{
									echo "No Record Found";
								}
								echo "</table>";
							}
						?>
					</div>
				</div>
			</div>

				<?php include"footer.php";?>
	</body>
</html>
