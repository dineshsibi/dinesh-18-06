<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Details</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/view_details.css">
    <link rel="stylesheet" href="css/toggle.css">
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
        <h1>Application Details</h1>
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

        if (isset($_GET['timestamp'])) {
            $timestamp = $_GET['timestamp'];

            // Prepare and execute the SQL query
            $stmt = $conn->prepare("SELECT * FROM grievances WHERE created_at = ?");
            $stmt->bind_param("s", $timestamp);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                // Split the results into two columns
                $row = $result->fetch_assoc();
                $half = ceil(count($row) / 2);
                $columns = array_keys($row);
                $values = array_values($row);

                echo '<div class="details-container">';
                echo '<div class="details-column">';
                echo '<table>';
                echo '<tr><th>Column Name</th><th>Value</th></tr>';
                for ($i = 0; $i < $half; $i++) {
                    $column = htmlspecialchars($columns[$i]);
                    $value = htmlspecialchars($values[$i]);
                    if (in_array($column, ['document1', 'document2', 'document3', 'document4', 'document5', 'document6', 'document7', 'document8', 'document9'])) {
                        // Display document link instead of file path
                        echo "<tr><td>$column</td><td><a class='document-link' href='uploads/$value' target='_blank'>View Document</a></td></tr>";
                    } else {
                        echo "<tr><td>$column</td><td>$value</td></tr>";
                    }
                }
                echo '</table>';
                echo '</div>';

                echo '<div class="details-column">';
                echo '<table>';
                echo '<tr><th>Column Name</th><th>Value</th></tr>';
                for ($i = $half; $i < count($columns); $i++) {
                    $column = htmlspecialchars($columns[$i]);
                    $value = htmlspecialchars($values[$i]);
                    if (in_array($column, ['Fees_Payment_Details','Hall_Ticket','Exam_Application_Form','Available_Mark_Statement','Consolidated_Mark_Statement','Course_Completion_Certificate','Application_Fees','Genuine_Certificate_Fees','PSTM',])) {
                        // Display document link instead of file path
                        echo "<tr><td>$column</td><td><a class='document-link' href='uploads/$value' target='_blank'>View Document</a></td></tr>";
                    } else {
                        echo "<tr><td>$column</td><td>$value</td></tr>";
                    }
                }
                echo '</table>';
                echo '</div>';
                echo '</div>';
            } else {
                echo "<p>No records found for the given timestamp.</p>";
            }

            $stmt->close();
        } else {
            echo "<p>Invalid request.</p>";
        }

        $conn->close();
        ?>
        <a href="status_check.html" class="back-button">Back to Status Check</a>
    </div>
</body>
<script src="script/toggle.js"></script>
</html>
