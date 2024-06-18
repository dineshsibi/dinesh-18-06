<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission </title>
    <link rel="stylesheet" href="css/confirmation.css">
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
        <?php if ($_GET['status'] === 'success'): ?>
            <h1 class="success">Submission Successful!</h1>
            <h2>Thank you for submitting your information,you can check your application status by using your register number  .</h2>
        <?php else: ?>
            <h1 class="failure">Submission Failed</h1>
            <p>There was an error processing your request. Please try again.</p>
        <?php endif; ?>
        <a href="home.php">Back to Home</a>
    </div>
</body>
<script src="script/toggle.js"></script>
</html>
