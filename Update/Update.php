<?php
    include("../connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Case-Crimson Vault</title>
    <link rel="stylesheet" href="Update.css">
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
        <a id="nav" class="closed_cases" href="../Update/Upd.php">Update case</a>
        <a id="nav" class="add_case" href="../Cases/Addcase.php">Add New Case</a>
     </div>
     <div class="php">
<?php
$sql = "SELECT * FROM Cases";
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
<table>
<form action="updatedb.php" method="POST" class="form">
   <tr><td> <label for="caseid" class="lab">Case Id</label></td>
    <td><input type="number" class="inp" name="caseid" maxlength="20" required></td></tr>
    <tr><td><label for="casestatus" class="lab">Case status</label></td>
    <td><select name="casestatus" class="inp">
        <option value="Active">Active</option>
        <option value="Closed">Closed</option>
    </select></td></tr> 
    <tr><td colspan=2><button name="submit" class="but">Update</button></td></tr>
</form>
</table>
</div>
</body>
</html>