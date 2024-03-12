<?php
include("../connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="../staff/staff.css">
</head>
<body >
    <div class="homepage">
    <header>

        <h2>Criminal Database Management</h2> <br>
      <a class="out" href="../index.php">Logout</a>
    </header>
    <div class="nav">
    <a id="nav" class="home" href="../home/home.php">Home</a>
        <a id="nav" class="staff" href="../staff/staff.php">Staff List</a>
        <a id="nav" class="active_cases" href="../Active/active.php">Active Cases</a>
        <a id="nav" class="closed_cases" href="../Closed/closed.php">Closed cases</a>
        <a id="nav" class="add_case" href="../Cases/Addcase.php">Add New Case</a>
     </div>

<div class="php">
<?php
$sql = "SELECT * FROM Cases where Case_status='Closed'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Case ID</th><th>Case Type</th><th>Case Status</th><th>Criminal name</th><th>Date of crime</th><th>Staff ID</th></tr>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Case_id"] . "</td>";
        echo "<td>" . $row["Case_type"] . "</td>";
        echo "<td>" . $row["Case_status"] . "</td>";
        echo "<td>" . $row["Criminal_name"] . "</td>";
        echo "<td>" . $row["Date_of_crime"] . "</td>";
        echo "<td>" . $row["Staff_id"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}
?>
</div>
</body>
</html>