<?php 
require_once("include/config.php");
if(!empty($_POST["email"])) {
	$email= $_POST["email"];
		$result ="SELECT email FROM users WHERE email='$email'";
		$stmt = $conn->prepare($result);
		$count = $stmt->rowCount();
	if($count>0)
	{
	echo "<span style='color:red'> Email already exists .</span>";
	 echo "<script>$('#submit').prop('disabled',true);</script>";
	} else{
		
		echo "<span style='color:green'> Email available for Registration .</span>";
	 echo "<script>$('#submit').prop('disabled',false);</script>";
	}
}


?>
