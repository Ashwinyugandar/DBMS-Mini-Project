<?php
    include("../connection.php");
    if(isset($_POST['submit'])){
	    $casetype=$_POST['casetype'];
        $casestatus=$_POST['casestatus'];
        $criminal=$_POST['criminal'];
        $dateofcrime=$_POST['dateofcrime'];
        $staffid=$_POST['staffid'];
        
	    $sql="insert into Cases(Case_type,Case_status,Criminal_name,Date_of_crime,Staff_id) values ('$casetype','$casestatus','$criminal','$dateofcrime','$staffid')";
	    if (mysqli_query($conn, $sql)) {
            echo '<script>window.location.href="Addcase.php";
                  alert("Case added successfully");
                  </script>';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
	    }
?>