<?php
    include("connection.php");
    if(isset($_POST['submit'])){
	    $empid=$_POST['username'];
	    $emp_password=$_POST['password'];

	    $sql="select * from Login where Emp_id='$empid' and Emp_password='$emp_password'";
	    $result=mysqli_query($conn,$sql);
	    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	    $count=mysqli_num_rows($result);

	    if($count == 1){
		    header("Location:home.php");
	    }else{
		    echo '<script>window.location.href="index.php";
				alert("Login failed");
				</script>';
	    }
    }
?>