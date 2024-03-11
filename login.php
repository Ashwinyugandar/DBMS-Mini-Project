<?php
    include("connection.php");
    if(isset($_POST['submit'])){
	    $username=$_POST['username'];
	    $password=$_POST['password'];

	    $sql="select * from Login where Staff_id='$username' and Password='$password'";
	    $result=mysqli_query($conn,$sql);
	    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	    $count=mysqli_num_rows($result);

	    if($count == 1){
		    header("Location:home\home.php");
	    }else{
		    echo '<script>window.location.href="index.php";
				alert("Login failed");
				</script>';
	    }
    }
?>