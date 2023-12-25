<?php
$firstname= $_REQUEST['firstname']; 
$lastname= $_REQUEST['lastname']; 
$username= $_REQUEST['username'];    
$email= $_REQUEST['email'];    
$password= $_REQUEST['password'];    

if(isset($_POST["send"]))
{
	$conn= mysqli_connect('localhost','Mariam','123','e-learning');
	$insert="insert into student_inf values('$firstname','$lastname','$username','$email','$password')";

	mysqli_query($conn,$insert);
	

	if($conn){
		echo("<h1 style=color:green;> Your Registartion is Done!</h1>");

	}
	else{
        echo("<h1 style=color:red;> Your Registartion is Failed </h1>");
    }
}
?>