<?php
		// uni_set('short_open_tag','on');
		$con = mysqli_connect("127.0.0.1","root","","questions");
		$sql= "SELECT testName FROM test";
		$query= mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://kit.fontawesome.com/7d83c3208b.js" crossorigin="anonymous"></script>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>test</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){

			$("#testName").click(function(){
				$("#testName").attr({
					value: <?php $test?>
				})
			})
		})
	</script>
	<style type="text/css">
		.form-control{
			width: 75%;
			margin-left: 10%;
		}
		.jumbotron{
			text-align: center;
		}

	</style>
</head>
<body>

<!-- <?php
	//while ($rows=mysqli_fetch_array($query)) {
	

?>
 -->	<form action="test1.php" method="post">
 		<div class="jumbotron">
 			<h1 class="display-4">Please Select a test</h1><hr>
 		<select name="btnSel" class="form-control" >
		<?php	while ($rows=mysqli_fetch_array($query)){?>
  				<option><?php 
				echo "$rows[testName]";		
				?></option>
			<?php
				 }
  			?>	
		</select><br>
	
		<input class="btn btn-info" type="submit" id="testName" value='attempt'></div>
	<!-- <button type="submit" >
		<?php 
		//		echo "$rows[testName]";		
		?>
	</button> -->

</form>
</body>
</html>
