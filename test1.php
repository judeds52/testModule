
<?php
error_reporting(E_ALL ^ E_WARNING);

	$testName= $_POST['btnSel'];
		$con = mysqli_connect("127.0.0.1","root","","questions");


	$qtn1="select qtn from questions where testName='$testName'&&qtnSet=1";
		$query1= mysqli_query($con,$qtn1);
	$qtn2="select qtn from questions where testName='$testName'&&qtnSet=2";
		$query2= mysqli_query($con,$qtn2);
	$qtn3="select qtn from questions where testName='$testName'&&qtnSet=3";
		$query3= mysqli_query($con,$qtn3);
	$qtn4="select qtn from questions where testName='$testName'&&qtnSet=4";
		$query4= mysqli_query($con,$qtn4);
	$qtn5="select qtn from questions where testName='$testName'&&qtnSet=5";
		$query5= mysqli_query($con,$qtn5);
	$qtn6="select qtn from questions where testName='$testName'&&qtnSet=6";
		$query6= mysqli_query($con,$qtn6);
	$qtn7="select qtn from questions where testName='$testName'&&qtnSet=7";
		$query7= mysqli_query($con,$qtn7);
	$qtn8="select qtn from questions where testName='$testName'&&qtnSet=8";
		$query8= mysqli_query($con,$qtn8);
	$qtn9="select qtn from questions where testName='$testName'&&qtnSet=9";
		$query9= mysqli_query($con,$qtn9);
	$qtn10="select qtn from questions where testName='$testName'&&qtnSet=10";
		$query10= mysqli_query($con,$qtn10);
	
$rows1=mysqli_fetch_array($query1);
$rows2=mysqli_fetch_array($query2);
$rows3=mysqli_fetch_array($query3);
$rows4=mysqli_fetch_array($query4);
$rows5=mysqli_fetch_array($query5);
$rows6=mysqli_fetch_array($query6);
$rows7=mysqli_fetch_array($query7);
$rows8=mysqli_fetch_array($query8);
$rows9=mysqli_fetch_array($query9);
$rows10=mysqli_fetch_array($query10);


$opt1="select opt from options where testName='$testName'&&qtnSet=1";
	$query11=mysqli_query($con,$opt1);
$opt2="select opt from options where testName='$testName'&&qtnSet=2";
	$query12=mysqli_query($con,$opt2);
$opt3="select opt from options where testName='$testName'&&qtnSet=3";
	$query13=mysqli_query($con,$opt3);
$opt4="select opt from options where testName='$testName'&&qtnSet=4";
	$query14=mysqli_query($con,$opt4);
$opt5="select opt from options where testName='$testName'&&qtnSet=5";
	$query15=mysqli_query($con,$opt5);
$opt6="select opt from options where testName='$testName'&&qtnSet=6";
	$query16=mysqli_query($con,$opt6);
$opt7="select opt from options where testName='$testName'&&qtnSet=7";
	$query17=mysqli_query($con,$opt7);
$opt8="select opt from options where testName='$testName'&&qtnSet=8";
	$query18=mysqli_query($con,$opt8);
$opt9="select opt from options where testName='$testName'&&qtnSet=9";
	$query19=mysqli_query($con,$opt9);
$opt10="select opt from options where testName='$testName'&&qtnSet=10";
	$query20=mysqli_query($con,$opt10);

?>
<!DOCTYPE html>
<html>
<head>
	<title>test page</title>
	<script src="https://kit.fontawesome.com/7d83c3208b.js" crossorigin="anonymous"></script>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
  	.jumbotron>h2{
  		text-align: center;
  	}
  	.btn123{
  		width: 100%;
  		text-align: center;
  	}

  </style>
</head>
<body>
	<form action="eval.php" method="post">

		<?php echo '<input type="text" name="testName" value="'.$testName.'" hidden>';?>
	<div class="jumbotron" class="jumbotron">
		<h2 class="display-4">
			<?php echo "$rows1[qtn]"?>
		</h2><hr>
		<p class="po">
			<?php
			 while ($rows11=mysqli_fetch_array($query11)) {
						
						 echo '<input type="radio" id="ans1" name="ans1" value="'.$rows11[opt].'" required>&nbsp;'; echo "$rows11[opt]<br>";
						
					} ?>
		</p>
	</div>
	<div class="jumbotron">
		<h2>
			<?php echo "$rows2[qtn]"?>
		</h2><hr>
		<p>
			<?php
			 while ($rows12=mysqli_fetch_array($query12)) {
						echo '<input type="radio" id="ans2" name="ans2" value="'.$rows12[opt].'" required>&nbsp;'; echo "$rows12[opt]<br>";
						
					} ?>
		</p>
	</div>
	<div class="jumbotron">
		<h2>
			<?php echo "$rows3[qtn]"?>
		</h2><hr>
		<p>
			<?php
			 while ($rows13=mysqli_fetch_array($query13)) {
						echo '<input type="radio" id="ans3" name="ans3" value="'.$rows13[opt].'" required>&nbsp;'; echo "$rows13[opt]<br>";
						
					} ?>
		</p>
	</div>
	<div class="jumbotron">
		<h2>
			<?php echo "$rows4[qtn]"?>
		</h2><hr>
		<p>
			<?php
			 while ($rows14=mysqli_fetch_array($query14)) {
						echo '<input type="radio" id="ans4" name="ans4" value="'.$rows14[opt].'" required>&nbsp;'; echo "$rows14[opt]<br>";
						
					} ?>
		</p>
	</div>
	<div class="jumbotron">
		<h2>
			<?php echo "$rows5[qtn]"?>
		</h2><hr>
		<p>
			<?php
			 while ($rows15=mysqli_fetch_array($query15)) {
						echo '<input type="radio" id="ans5" name="ans5" value="'.$rows15[opt].'" required>&nbsp;'; echo "$rows15[opt]<br>";
						
					} ?>
		</p>
	</div>
	<div class="jumbotron">
		<h2>
			<?php echo "$rows6[qtn]"?>
		</h2><hr>
		<p>
			<?php
			 while ($rows16=mysqli_fetch_array($query16)) {
						echo '<input type="radio" id="ans6" name="ans6" value="'.$rows16[opt].'" required>&nbsp;'; echo"$rows16[opt]<br>";
						
					} ?>
		</p>
	</div>
	<div class="jumbotron">
		<h2>
			<?php echo "$rows7[qtn]"?>
		</h2><hr>
		<p>
			<?php
			 while ($rows17=mysqli_fetch_array($query17)) {
						echo '<input type="radio" id="ans7" name="ans7" value="'.$rows17[opt].'" required>&nbsp;'; echo "$rows17[opt]<br>";
						
					} ?>
		</p>
	</div>
	<div class="jumbotron">
		<h2>
			<?php echo "$rows8[qtn]"?>
		</h2><hr>
		<p>
			<?php
			 while ($rows18=mysqli_fetch_array($query18)) {
						echo '<input type="radio" id="ans8" name="ans8" value="'.$rows18[opt].'" required>&nbsp;'; echo "$rows18[opt]<br>";
						
					} ?>
		</p>
	</div>
	<div class="jumbotron">
		<h2>
			<?php echo "$rows9[qtn]"?>
		</h2><hr>
		<p>
			<?php
			 while ($rows19=mysqli_fetch_array($query19)) {
						echo '<input type="radio" id="ans9" name="ans9" value="'.$rows19[opt].'" required>&nbsp;'; echo "$rows19[opt]<br>";
						
					} ?>
		</p>
	</div>
	<div class="jumbotron">
		<h2>
			<?php echo "$rows10[qtn]"?>
		</h2><hr>
		<p>
			<?php
			 while ($rows20=mysqli_fetch_array($query20)) {
						
						echo '<input type="radio" id="ans10" name="ans10" value="'.$rows20[opt].'" required>&nbsp;'; echo "$rows20[opt]<br>";
						
					} ?>
		</p>
	</div>
	<div class="btn123">
		<input type="submit" class="btn btn-info" name="submit">
	</div>
</form>
<!-- 	<form action="eval.php" method="post">
<?php
			//$count=1;
				// while ($rows=mysqli_fetch_array($query)) {

				// 	$sql1="select opt from options where testName='$testName'&&qtnSet='$count'";
				// 		$query1= mysqli_query($con,$sql1);
	
				// 	echo "$rows[qtn]<br>";
				// 	while ($rows1=mysqli_fetch_array($query1)) {
						?>
						 <input type="radio" name="ans1"><?php //echo "$rows1[opt]<br>";
						
			//		}
			//		$count++;
				//}
			?> 


	</form>		

 --><!-- 
<script type="text/javascript">
	//var ans1= document.getElementById('ans1').value
		 document.getElementById('ans20').value= <?php// echo $rows20[opt] $;?>;
</script> -->

</body>
</html>