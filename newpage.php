<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="css/newpage.css">
  <link rel="stylesheet" href="css/toggle.css">
  
</head>
<body>
<header>
        <img src="CFR.png" width="100%" alt="no image">
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
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br>
        
    <form action="submit.php" method="POST" enctype="multipart/form-data">
    <h1 text-color="white">>- Student Information</h1>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="registerNumber">Register Number:</label>
        <input type="text" id="registerNumber" name="registerNumber" required>

        <label for="mobile">Mobile Number:</label>
        <input type="tel" id="mobile" name="mobile" pattern="[0-9]{10}" required>

        <label for="idCard">Upload ID Card:</label>
        <input type="file" id="idCard" name="idCard" accept="image/*" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="date_of_birth">Date Of Birth:</label>
        <input type="date" id="date_of_birth" name="date_of_birth" required>

        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="8" placeholder="eg : R. VASUDEVAN

No. 1, New Bangaru Naidu Colony,

K.K. Nagar (West), Chennai - 600078." required></textarea>

        <label for="grievance">Grievance Type:</label>
        <select id="grievance" name="grievance" required>
            <option value="Select">Select</option>
            <option value="Course Completion Certificate">Course Completion Certificate</option>
            <option value="Result">Result</option>
            <option value="Current Mark Statement">Current Mark Statement</option>
            <option value="Consolidated Mark Statement">Consolidated Mark Statement</option>
            <option value="Provisional Certificate">Provisional Certificate</option>
            <option value="Genuine Certificate">Genuine Certificate</option>
            <option value="PSTM">PSTM</option>
        </select>
        <label for="batch">Batch</label>
        <input type="text" id="batch" name="batch" placeholder="eg:2022-2023">
        <label for="programType">Program Type:</label>
        <select name="programType" id="programType">
            <option value="">Select Program Type</option>
            <option value="semester">Semester</option>
            <option value="nonSemester">Non-Semester</option>
        </select>

        <label for="main-dropdown">Course Type:</label>
        <select id="main-dropdown" name="main-dropdown" value="main-dropdown">
            <option value="" name="">Select Course Type</option>
            <!-- Options will be populated by JavaScript -->
        </select>

        <div id="sub-dropdown-container">
            <!-- Sub-dropdown will be populated by JavaScript -->
        </div>

        <input type="submit" value="Submit">
    </form>

    
</body>
<script src="script/newpage.js"></script>
<script src="script/toggle.js"></script>
</html>
