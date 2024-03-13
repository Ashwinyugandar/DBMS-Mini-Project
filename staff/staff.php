<?php
include("../connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff List-Crimson Vault</title>
    <link rel="stylesheet" href="staffs.css">
</head>
<body >
    <div class="homepage">
    <header>

        <h2>Crimson Vault</h2> <br>
      <a class="out" href="../index.php">Logout</a>
    </header>
    <div class="nav">
    <a id="nav" class="home" href="../home/home.php">Home</a>
        <a id="nav" class="staff" href="../staff/staff.php">Staff List</a>
        <a id="nav" class="active_cases" href="../Active/active.php">Active Cases</a>
        <a id="nav" class="closed_cases" href="../Closed/closed.php">Closed cases</a>
        <a id="nav" class="closed_cases" href="../Update/Update.php">Update case</a>
        <a id="nav" class="add_case" href="../Cases/Addcase.php">Add New Case</a>
     </div>
     
<div class="php">
<?php
$sql = "SELECT * FROM Staff";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Staff ID</th><th>Staff Name</th><th>Designation</th><th>Date of Joining</th></tr>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Staff_id"] . "</td>";
        echo "<td>" . $row["Staff_name"] . "</td>";
        echo "<td>" . $row["Designation"] . "</td>";
        echo "<td>" . $row["DOJ"] . "</td>";
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
