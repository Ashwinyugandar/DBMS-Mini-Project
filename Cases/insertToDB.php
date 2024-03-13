<?php
include("../connection.php");
if(isset($_POST['submit'])){
    // Get form data
    $casetype = $_POST['casetype'];
    $casestatus = $_POST['casestatus'];
    $criminal = $_POST['criminal'];
    $dateofcrime = $_POST['dateofcrime'];
    $staffid=$_POST['staffid'];
    
    // Find the last used ID
    $sql_max_id = "SELECT MAX(Case_id) AS max_id FROM Cases";
    $result_max_id = mysqli_query($conn, $sql_max_id);
    $row_max_id = mysqli_fetch_assoc($result_max_id);
    $last_used_id = $row_max_id['max_id'];
    
    // Set the AUTO_INCREMENT value
      $sql_auto_increment=$last_used_id+1;
    // Prepare the SQL statement
    $sql = "INSERT INTO Cases (Case_id, Case_type, Case_status, Criminal_name, Date_of_crime,Staff_id) 
            VALUES ($sql_auto_increment, '$casetype', '$casestatus', '$criminal', '$dateofcrime','$staffid')";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        echo '<script>window.location.href="Addcase.php";
              alert("Case added successfully");
              </script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>