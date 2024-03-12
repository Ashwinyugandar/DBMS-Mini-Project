<?php
    include("../connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cases.css">
    <title>Add a case</title>
</head>
<body>
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
    <table>
    <form action="insertToDB.php" method="POST" class="form">
        <tr><td class="label"><label for="casetype">Type of case</label></td>
        <td><input class="input" type="text" name="casetype" required></td></tr>
        <tr><td class="label"><label for="casestatus">Case Status</label></td>
        <td><select class="input"  name="casestatus">
            <option value="Active">Active</option>
        </select></td></tr>
        <tr><td class="label"><label for="criminal">Name of criminal</label></td>
        <td><input class="input" type="text" name="criminal" required></td></tr>
        <tr><td class="label"><label for="dateofcrime">Date of crime</label></td>
        <td><input class="input" type="date" name="dateofcrime" required></td></tr>
        <tr><td class="label"><label for="staffid">Staff Id</label></td>
        <td><input class="input" type="text" name="staffid" required></td></tr>
        <tr><td><button type="submit" name="submit" class="submit">Submit</button></td></tr>
    </form>
</table>
</div>
</body>
</html>