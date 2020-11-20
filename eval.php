<?php
error_reporting(E_ALL ^ E_WARNING);
	
		$con = mysqli_connect("127.0.0.1","root","","questions");
		echo empty($_POST['ans1']);

	$ans1= $_POST['ans1'];
	$ans2= $_POST['ans2'];
	$ans3= $_POST['ans3'];
	$ans4= $_POST['ans4'];
	$ans5= $_POST['ans5'];
	$ans6= $_POST['ans6'];
	$ans7= $_POST['ans7'];
	$ans8= $_POST['ans8'];
	$ans9= $_POST['ans9'];
	$ans10= $_POST['ans10'];
	$testName= $_POST['testName'];
	$count1=0;
	$count2=0;
	$count3=0;
	$count4=0;
	$count5=0;
	$count6=0;
	$count7=0;
	$count8=0;
	$count9=0;
	$count10=0;
	
	// echo "$ans1<br>$ans2<br>$ans3<br>$ans4<br>$ans5<br>$ans6<br>$ans7<br>$ans8<br>$ans9<br>$ans10<br>$testName";

	$sql1="select ans from questions where testName='$testName'&&qtnSet=1";
	$sql2="select ans from questions where testName='$testName'&&qtnSet=2";
	$sql3="select ans from questions where testName='$testName'&&qtnSet=3";
	$sql4="select ans from questions where testName='$testName'&&qtnSet=4";
	$sql5="select ans from questions where testName='$testName'&&qtnSet=5";
	$sql6="select ans from questions where testName='$testName'&&qtnSet=6";
	$sql7="select ans from questions where testName='$testName'&&qtnSet=7";
	$sql8="select ans from questions where testName='$testName'&&qtnSet=8";
	$sql9="select ans from questions where testName='$testName'&&qtnSet=9";
	$sql10="select ans from questions where testName='$testName'&&qtnSet=10";

	$query1=mysqli_query($con,$sql1);
	$query2=mysqli_query($con,$sql2);
	$query3=mysqli_query($con,$sql3);
	$query4=mysqli_query($con,$sql4);
	$query5=mysqli_query($con,$sql5);
	$query6=mysqli_query($con,$sql6);
	$query7=mysqli_query($con,$sql7);
	$query8=mysqli_query($con,$sql8);
	$query9=mysqli_query($con,$sql9);
	$query10=mysqli_query($con,$sql10);

	$rows1=mysqli_fetch_array($query1,MYSQLI_ASSOC);
	$rows2=mysqli_fetch_array($query2,MYSQLI_ASSOC);
	$rows3=mysqli_fetch_array($query3,MYSQLI_ASSOC);
	$rows4=mysqli_fetch_array($query4,MYSQLI_ASSOC);
	$rows5=mysqli_fetch_array($query5,MYSQLI_ASSOC);
	$rows6=mysqli_fetch_array($query6,MYSQLI_ASSOC);
	$rows7=mysqli_fetch_array($query7,MYSQLI_ASSOC);
	$rows8=mysqli_fetch_array($query8,MYSQLI_ASSOC);
	$rows9=mysqli_fetch_array($query9,MYSQLI_ASSOC);
	$rows10=mysqli_fetch_array($query10,MYSQLI_ASSOC);


if ($rows1[ans]==$ans1) {
	$count1++;
}
if ($rows2[ans]==$ans2) {
	$count2++;
}
if ($rows3[ans]==$ans3) {
	$count3++;
}
if ($rows4[ans]==$ans4) {
	$count4++;
}
if ($rows5[ans]==$ans5) {
	$count5++;
}
if ($rows6[ans]==$ans6) {
	$count6++;
}
if ($rows7[ans]==$ans7) {
	$count7++;
}
if ($rows8[ans]==$ans8) {
	$count8++;
}
if ($rows9[ans]==$ans9) {
	$count9++;
}
if ($rows10[ans]==$ans10) {
	$count10++;
}

$result=$count1+$count2+$count3+$count4+$count5+$count6+$count7+$count8+$count9+$count10;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Results</title>
	<script src="https://kit.fontawesome.com/7d83c3208b.js" crossorigin="anonymous"></script>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <style type="text/css">
 	.jumbotron{
 		text-align: center;
 	}
 </style>
</head>
<body>

	<div class="jumbotron">
		<h1 class="display-4">Your Score is</h1><hr>
		<?php echo "<h2>$result/10</h2>";?>		
	</div>


</body>
</html>













