<?php
include("../connection.php");
if(isset($_POST['submit'])){
    // Get form data
    $caseid = $_POST['caseid'];
    $casestatus = $_POST['casestatus'];
    
    // Prepare the SQL statement
    $sql = "UPDATE Cases set Case_status='$casestatus' where Case_id=$caseid";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        echo '<script>window.location.href="Upd.php";
              alert("Case updated successfully");
              </script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>