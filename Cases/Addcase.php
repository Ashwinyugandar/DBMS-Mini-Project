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
<div>
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
    <form action="insertToDB.php" method="POST" class="form">
        <div>
        <div><label for="casetype">Type of case</label>
        <input type="text" name="casetype"></div>
        <div><label for="casestatus">Case Status</label>
        <select name="casestatus">
            <option value="Active">Active</option>
        </select></div>
        <div><label for="criminal">Name of criminal</label>
        <input type="text" name="criminal"></div>
        <div><label for="dateofcrime">Date of crime (dd/mm/yyyy)</label>
        <input type="text" name="dateofcrime"></div>
        <div><label for="staffid">Staff Id</label>
        <input type="text" name="staffid"></div>
        <div><button type="submit" name="submit">Submit</button></div>
        </div>
    </form>
</body>
</html>