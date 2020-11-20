<!DOCTYPE html>
<html>
<head>
	<title>test confirmation</title>
	<script src="https://kit.fontawesome.com/7d83c3208b.js" crossorigin="anonymous"></script>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
  	
  	.card{
  		width: 50%;
  		height: 500px;
  		text-align: center;
  		border-radius: 1.25rem; 
  		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  		margin-left:20%;
  		margin-top: 3%;
  		margin-bottom: 3%

  	}
  </style>
</head>
<body alink="white" vlink="white" link="white">
<?php 
	error_reporting(E_ALL ^ E_WARNING);
	$con = mysqli_connect("127.0.0.1","root","","questions");

	// if (!$con) {
	// 	console.log("database connectiion failed") ;
	// }
	// else{
	// 	console.log("database connected");
	// }
//test name
	// echo "$rad1\n$rad2\n$rad3\n$rad4\n$rad5\n$rad6\n$rad7\n$rad8\n$rad9\n$rad10";
	// echo "$rad2";
	// echo "$rad3";	
	


$testCheck= $_POST['testName'];

	$sql3="select testName from test where testName='$testCheck'";
// echo "$testCheck";
	$query= mysqli_query($con,$sql3);
	
	$rows=mysqli_fetch_array($query);
	// 		echo "$rows[testName]";
	// while () {
		// echo "$rows[testName]";
		// echo "$test";

//***********CHECK THE LOOP FOR ARRAY**********************
		// while ($rows=mysqli_fetch_array($query){
				
		// 		echo "$rows[testName]";

		// }
	// $count=0;

		if (is_null($rows[testName])) {
			submitData();
		}
		else{
			?>
			<div class="card">
			<?php
			echo "<h2>test name already exsists</h2>";?>
			<button class="btn btn-info"> <a href="start.html"> Main Menu</a></button></div>
			<?php
		}


/*
		while ($rows=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
			
		// 	$checkTrue=empty($rows[testName]);
		// // $checkName=$rows[testName];
		// 	// echo "checkTrue";
		// 	if ($checkTrue) {
		// 		submitData();
		// 		break;
 	// 			// echo "reached here <br>";
		// 	}
				// else{
				// 		if ($rows[testName]==$testCheck) {
				// 						$count++;
				// 					}
				// 		// else{
							
				// 		// 	submitData();

				// 		// }		
				echo "$rows[testName]<br>";

				}
// }

	if ($count>0) {

		submitData();
	}
	else{
		echo "Test name already exsists";
	}*/


		// if ($checkName==$test) {
		// 	echo "test name already exsists";
		// }

		// else{
		 function submitData()
			{
				



		$con = mysqli_connect("127.0.0.1","root","","questions");
		
			$test = $_POST['testName'];

//qustions
	$qtn1= $_POST['qtn1'];
	$qtn2= $_POST['qtn2'];
	$qtn3= $_POST['qtn3'];
	$qtn4= $_POST['qtn4'];
	$qtn5= $_POST['qtn5'];
	$qtn6= $_POST['qtn6'];
	$qtn7= $_POST['qtn7'];
	$qtn8= $_POST['qtn8'];
	$qtn9= $_POST['qtn9'];
	$qtn10= $_POST['qtn10'];

//options
	//opt 1 
		$qtn_set1=1;
	$opt1= $_POST['qtn1opt1'];
	$opt2= $_POST['qtn1opt2'];
	$opt3= $_POST['qtn1opt3'];
	$opt4= $_POST['qtn1opt4'];
	//opt 2 
		$qtn_set2=2;

	$opt5= $_POST['qtn2opt1'];
	$opt6= $_POST['qtn2opt2'];
	$opt7= $_POST['qtn2opt3'];
	$opt8= $_POST['qtn2opt4'];
	//opt 3 
		$qtn_set3=3;

	$opt9= $_POST['qtn3opt1'];
	$opt10= $_POST['qtn3opt2'];
	$opt11= $_POST['qtn3opt3'];
	$opt12= $_POST['qtn3opt4'];
	//opt 4 
		$qtn_set4=4;
	
	$opt13= $_POST['qtn4opt1'];
	$opt14= $_POST['qtn4opt2'];
	$opt15= $_POST['qtn4opt3'];
	$opt16= $_POST['qtn4opt4'];
	//opt 5
		$qtn_set5=5;

	$opt17= $_POST['qtn5opt1'];
	$opt18= $_POST['qtn5opt2'];
	$opt19= $_POST['qtn5opt3'];
	$opt20= $_POST['qtn5opt4'];
    //opt 6
		$qtn_set6=6;

	$opt21= $_POST['qtn6opt1'];
	$opt22= $_POST['qtn6opt2'];
	$opt23= $_POST['qtn6opt3'];
	$opt24= $_POST['qtn6opt4'];
    //opt 7
		$qtn_set7=7;

	$opt25= $_POST['qtn7opt1'];
	$opt26= $_POST['qtn7opt2'];
	$opt27= $_POST['qtn7opt3'];
	$opt28= $_POST['qtn7opt4'];
    //opt 8 
		$qtn_set8=8;

	$opt29= $_POST['qtn8opt1'];
	$opt30= $_POST['qtn8opt2'];
	$opt31= $_POST['qtn8opt3'];
	$opt32= $_POST['qtn8opt4'];
    //opt 9 
		$qtn_set9=9;

	$opt33= $_POST['qtn9opt1'];
	$opt34= $_POST['qtn9opt2'];
	$opt35= $_POST['qtn9opt3'];
	$opt36= $_POST['qtn9opt4'];
    //opt 10 
		$qtn_set10=10;

	$opt37= $_POST['qtn10opt1'];
	$opt38= $_POST['qtn10opt2'];
	$opt39= $_POST['qtn10opt3'];
	$opt40= $_POST['qtn10opt4'];


//answers
	$rad1 = $_POST['qtn1chk'];
	$rad2 = $_POST['qtn2chk'];
	$rad3 = $_POST['qtn3chk'];
	$rad4 = $_POST['qtn4chk'];
	$rad5 = $_POST['qtn5chk'];
	$rad6 = $_POST['qtn6chk'];
	$rad7 = $_POST['qtn7chk'];
	$rad8 = $_POST['qtn8chk'];
	$rad9 = $_POST['qtn9chk'];
	$rad10 = $_POST['qtn10chk'];
	



	$sql = "insert into questions (testName,qtn,qtnSet,ans) values ('$test','$qtn1',$qtn_set1,'$rad1'),('$test','$qtn2',$qtn_set2,'$rad2'),('$test','$qtn3',$qtn_set3,'$rad3'),('$test','$qtn4',$qtn_set4,'$rad4'),('$test','$qtn5',$qtn_set5,'$rad5'),('$test','$qtn6',$qtn_set6,'$rad6'),('$test','$qtn7',$qtn_set7,'$rad7'),('$test','$qtn8',$qtn_set8,'$rad8'),('$test','$qtn9',$qtn_set9,'$rad9'),('$test','$qtn10',$qtn_set10,'$rad10')";

	$sql1 = "insert into options (testName,opt,qtnSet,ans) values ('$test','$opt1',$qtn_set1,'$rad1'),('$test','$opt2',$qtn_set1,'$rad1'),('$test','$opt3',$qtn_set1,'$rad1'),('$test','$opt4',$qtn_set1,'$rad1'),('$test','$opt5',$qtn_set2,'$rad2'),('$test','$opt6',$qtn_set2,'$rad2'),('$test','$opt7',$qtn_set2,'$rad2'),('$test','$opt8',$qtn_set2,'$rad2'),('$test','$opt9',$qtn_set3,'$rad3'),('$test','$opt10',$qtn_set3,'$rad3'),('$test','$opt11',$qtn_set3,'$rad3'),('$test','$opt12',$qtn_set3,'$rad3'),('$test','$opt13',$qtn_set4,'$rad4'),('$test','$opt14',$qtn_set4,'$rad4'),('$test','$opt15',$qtn_set4,'$rad4'),('$test','$opt16',$qtn_set4,'$rad4'),('$test','$opt17',$qtn_set5,'$rad5'),('$test','$opt18',$qtn_set5,'$rad5'),('$test','$opt19',$qtn_set5,'$rad5'),('$test','$opt20',$qtn_set5,'$rad5'),('$test','$opt21',$qtn_set6,'$rad6'),('$test','$opt22',$qtn_set6,'$rad6'),('$test','$opt23',$qtn_set6,'$rad6'),('$test','$opt24',$qtn_set6,'$rad6'),('$test','$opt25',$qtn_set7,'$rad7'),('$test','$opt26',$qtn_set7,'$rad7'),('$test','$opt27',$qtn_set7,'$rad7'),('$test','$opt28',$qtn_set7,'$rad7'),('$test','$opt29',$qtn_set8,'$rad8'),('$test','$opt30',$qtn_set8,'$rad8'),('$test','$opt31',$qtn_set8,'$rad8'),('$test','$opt32',$qtn_set8,'$rad8'),('$test','$opt33',$qtn_set9,'$rad9'),('$test','$opt34',$qtn_set9,'$rad9'),('$test','$opt35',$qtn_set9,'$rad9'),('$test','$opt36',$qtn_set9,'$rad9'),('$test','$opt37',$qtn_set10,'$rad10 '),('$test','$opt38',$qtn_set10,'$rad10'),('$test','$opt39',$qtn_set10,'$rad10'),('$test','$opt40',$qtn_set10,'$rad10')";

	$sql2 ="insert into test (testName) values ('$test')";

if ($con->query($sql2) === TRUE) {
	if ($con->query($sql) === TRUE) {
 		if ($con->query($sql1) === TRUE) {
 			?>
 			<div class="card">
 			<?php
 			echo "<h2>new test added successfully</h2>";?>
 			<button class="btn btn-info"><a href="start.html">Main Menu</a></button>
 			<button class="btn btn-info"><a href="test.php">Take a test</a></button></div>
 			<?php
 		}
 		else {
  			echo "Error: " . $sql1 . "<br>" . $con->error;
		}
	}
 	else {
  		echo "Error: " . $sql . "<br>" . $con->error;
	}

}
else{
	echo "Error: " . $sql2 . "<br>" . $con->error;	
}
			
		}
	    
	

		

$con->close();
 ?>
</body>
</html>