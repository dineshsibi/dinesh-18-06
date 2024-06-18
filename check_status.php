<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Status</title>
    <link rel="stylesheet" href="css/check_status.css">
</head>
<body> 
<header>
    <img src="CFR.png" alt="Banner image not found">
    <button id="toggleButton">☰</button>
    <div id="dashboard" class="dashboard">
        <h2>Dashboard</h2>
        <button class="dashboard-button" id="button1">Student Grievance</button>
        <button class="dashboard-button" id="button2">Grievance Status</button>
        <button class="dashboard-button">Faculties</button>
        <button class="dashboard-button">Exams</button>
        <button class="dashboard-button">Administration</button>
        <button class="dashboard-button">Library</button>
    </div>
</header>
<div class="container">
    <h1> Application Status</h1>
    <?php
    // Database configuration
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vinzo1";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $register_number = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $register_number = $_POST['registerNumber'];

        // Prepare and execute the SQL query
        $stmt = $conn->prepare("SELECT * FROM grievances WHERE register_number = ?");
        $stmt->bind_param("s", $register_number);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr>";
           // echo "<th>Name</th>";
            echo "<th>Register Number</th>";
          //  echo "<th>Course Name</th>";
          //  echo "<th>Mobile</th>";
          //  echo "<th>Email</th>";
           // echo "<th>Address</th>";
            echo "<th>Application Submitted On</th>";
            echo "<th>Grievance Type</th>";
            echo "<th>Status</th>";
            echo "<th>Action</th>";
            echo "</tr>";

            // Output data of each row
            
// Your existing PHP code for fetching records
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['register_number']) . "</td>";
    echo "<td>" . htmlspecialchars($row['created_at']) . "</td>";
    echo "<td>" . htmlspecialchars($row['grievance_type']) . "</td>";
    echo "<td>" . htmlspecialchars($row['status']) . "</td>";
    echo "<td><button type='button' class='btn btn-primary view-details' data-timestamp='" . htmlspecialchars($row['created_at']) . "'>View Details</button></td>";
    echo "</tr>";
}


            echo "</table>";
        } else {
            echo "<p>No records found for the given register number.</p>";
        }

        $stmt->close();
    }

    $conn->close();
    ?>
    <a href="status_check.html">Back to Status Check</a>
</div>


</body>
<script src="script/check_status.js"></script>
</html>