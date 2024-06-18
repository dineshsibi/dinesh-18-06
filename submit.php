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

$name = $register_number = $course_name = $mobile = $email = $address = $id_card_filename = $grievance_type = $Dob=$program_type =$main_course = '';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $course = isset($_POST['course']) ? $_POST['course'] : 'Not selected';
    



}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $main_course = isset($_POST['main-dropdown']) ? $_POST['main-dropdown'] : 'Not selected';



}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetching form data
    $name = $_POST['name'];
    $register_number = $_POST['registerNumber'];
//    $course_name = $_POST['selectedSubDropdownValue'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    //$id_card_filename1=$_POST['idcard'];
    $id_card_filename = $_FILES['idCard']['name'];
    $grievance_type = $_POST['grievance'];
    $Dob=$_POST['date_of_birth'];
   // echo htmlspecialchars($Dob);
   $batch=$_POST['batch'];
   $status="in progress";
   $program_type=$_POST['programType'];
// Move uploaded file to the desired location
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["idCard"]["name"]);
if (move_uploaded_file($_FILES["idCard"]["tmp_name"], $target_file)) {
    // Execute prepared statement
   
    }
 else {
    echo "Error uploading file.";
}

// Close statement and connection
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document upload section</title>
    <link rel="stylesheet" href="css/submit.css">
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
<div class="wrapper">
    <div class="con1">
        <h1>ENTERED INFORMATIONS :</h1>
    <table>
            <tr>
                <th>Name</th>
                <td><?php echo htmlspecialchars($name); ?></td>
            </tr>
            <tr>
                <th>Register number</th>
                <td><?php echo htmlspecialchars($register_number); ?></td>
            </tr>
            <tr>
                <th>Course name</th>
                <td><?php echo htmlspecialchars($course); ?></td>
            </tr>
            <tr>
                <th>Mobile</th>
                <td><?php echo htmlspecialchars($mobile); ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo htmlspecialchars($email); ?></td>
            </tr>
            <tr>
                <th>ID card</th>
                <td><?php echo htmlspecialchars($id_card_filename); ?></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><?php echo htmlspecialchars($address); ?></td>
            </tr>
            <tr>
                <th>Grievance type</th>
                <td><?php echo htmlspecialchars($grievance_type); ?></td>
            </tr>
            <tr>
                <th>Batch</th>
                <td><?php echo htmlspecialchars($batch); ?></td>
            </tr>
        </table>
        <br>
        <br>
        
    </div>
    <!-- Form to upload additional documents -->

    <div class="container">
        <h2><span class="span1">*Note:</span>You need to merge all the related documents for your grievance into a single file and upload......(eg:if you have multiple fees document then merge it to one file and upload it)</h2><br><br>
        
    <form id="uploadForm" action="save_data.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="name" value="<?php echo htmlspecialchars($name); ?>">
        <input type="hidden" name="register_number" value="<?php echo htmlspecialchars($register_number); ?>">
        <input type="hidden" name="course_name" value="<?php echo htmlspecialchars($course); ?>">
        <input type="hidden" name="date_of_birth" value="<?php echo htmlspecialchars($Dob); ?>">
        <input type="hidden" name="program_type" value="<?php echo htmlspecialchars($program_type); ?>">
        <input type="hidden" name="main_course" value="<?php echo htmlspecialchars($main_course); ?>">

        <input type="hidden" name="mobile" value="<?php echo htmlspecialchars($mobile); ?>">
        <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>">
        <input type="hidden" name="address" value="<?php echo htmlspecialchars($address); ?>">
        <input type="hidden" name="idcard" value="<?php echo htmlspecialchars($id_card_filename); ?>">
        <input type="hidden" name="grievance_type" value="<?php echo htmlspecialchars($grievance_type); ?>">
        <input type="hidden" name="batch" value="<?php echo htmlspecialchars($batch); ?>">
        <input type="hidden" name="status" value="<?php echo htmlspecialchars($status); ?>">

        
        <label for="grievances_details"><h2>Grievances Details :</h2><span class="span1">*Enter the grievance subject with brief description</span></label>
        <textarea class="grievances_details" id="grievances_details" name="grievances_details" rows="10"  required></textarea>
        <label for="document1" id="label1"><h2>Fees Payment Details:</h2></label>
        <input type="file" name="document1" id="document1" accept=".pdf, .doc, .docx" ><br>
        
        <label for="document2" id="label2"><h2>Hall Ticket:</h2></label>
        <input type="file" name="document2" id="document2" accept=".pdf, .doc, .docx" ><br>
        
        <label for="document3" id="label3"><h2>Exam Application Form:</h2></label>
        <input type="file" name="document3" id="document3" accept=".pdf, .doc, .docx" ><br>
        
        <label for="document4" id="label4"><h2>Available Mark Statement:</h2></label>
        <input type="file" name="document4" id="document4" accept=".pdf, .doc, .docx" ><br>
        
        <label for="document5" id="label5"><h2>Consolidated Mark Statement:</h2></label>
        <input type="file" name="document5" id="document5" accept=".pdf, .doc, .docx" ><br>
        
        <label for="document6" id="label6"><h2>Course Completion Certificate:</h2></label>
        <input type="file" name="document6" id="document6" accept=".pdf, .doc, .docx" ><br>
        
        <label for="document7" id="label7"><h2>Application Fees:</h2></label>
        <input type="file" name="document7" id="document7" accept=".pdf, .doc, .docx" ><br>
        
        <label for="document8" id="label8"><h2>Genuine Certificate Fees:</h2></label>
        <input type="file" name="document8" id="document8" accept=".pdf, .doc, .docx" ><br>
        
        <label for="document9" id="label9"><h2>PSTM:</h2></label>
        <input type="file" name="document9" id="document9" accept=".pdf, .doc, .docx" >

        <input type="submit" value="Upload and Save Data">
    </form>
    </div>
</div>


<script>document.addEventListener("DOMContentLoaded", function () {
    const grievanceType = "<?php echo htmlspecialchars($grievance_type); ?>";
    const labels = [
        document.getElementById('label1'),
        document.getElementById('label2'),
        document.getElementById('label3'),
        document.getElementById('label4'),
        document.getElementById('label5'),
        document.getElementById('label6'),
        document.getElementById('label7'),
        document.getElementById('label8'),
        document.getElementById('label9')
    ];

    function hideAllLabels() {
        labels.forEach(label => {
            if (label) {
                label.style.display = 'none';
                const input = label.nextElementSibling;
                if (input) input.style.display = 'none';
            }
        });
    }

    function showLabels(indices) {
        indices.forEach(index => {
            if (labels[index]) {
                labels[index].style.display = 'block';
                const input = labels[index].nextElementSibling;
                if (input) input.style.display = 'block';
            }
        });
    }

    hideAllLabels();

    switch (grievanceType) {
        case 'Course Completion Certificate':
            showLabels([0]);
            break;
        case 'Result':
            showLabels([0, 1, 2]);
            break;
        case 'Current Mark Statement':
            showLabels([3]);
            break;
        case 'Consolidated Mark Statement':
            showLabels([0, 1, 2]);
            break;
        case 'Provisional Certificate':
            showLabels([5, 4, 2, 0]);
            break;
        case 'Genuine Certificate':
            showLabels([0]);
            break;
        case 'PSTM':
            showLabels([8]);
            break;
        default:
            // No default action
            break;
    }
});</script>

</body>

<script src="script/toggle.js"></script>
</html>