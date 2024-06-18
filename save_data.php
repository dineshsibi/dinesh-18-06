<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vinzo1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create 'uploads' directory if it doesn't exist
$target_dir = "uploads/";
if (!is_dir($target_dir)) {
    mkdir($target_dir, 0777, true);
}

// Handle file uploads
$documents = [];
for ($i = 1; $i <= 9; $i++) {
    $fileInputName = "document" . $i;
    if (!empty($_FILES[$fileInputName]['name'])) {
        $target_file = $target_dir . basename($_FILES[$fileInputName]['name']);
        move_uploaded_file($_FILES[$fileInputName]['tmp_name'], $target_file);
        $documents[$fileInputName] = $target_file;
    } else {
        $documents[$fileInputName] = null;
    }
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO grievances (name, register_number, course_name, date_of_birth, program_type, main_course, mobile, email, address, idcard, grievance_type, batch, status, grievances_details, Fees_Payment_Details, Hall_Ticket, Exam_Application_Form, Available_Mark_Statement, Consolidated_Mark_Statement, Course_Completion_Certificate, Application_Fees, Genuine_Certificate_Fees, PSTM) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param("sssssssssssssssssssssss",
    $_POST['name'],
    $_POST['register_number'],
    $_POST['course_name'],
    $_POST['date_of_birth'],
    $_POST['program_type'],
    $_POST['main_course'],
    $_POST['mobile'],
    $_POST['email'],
    $_POST['address'],
    $_POST['idcard'],
    $_POST['grievance_type'],
    $_POST['batch'],
    $_POST['status'],
    $_POST['grievances_details'],
    $documents['document1'],
    $documents['document2'],
    $documents['document3'],
    $documents['document4'],
    $documents['document5'],
    $documents['document6'],
    $documents['document7'],
    $documents['document8'],
    $documents['document9']
);

if ($stmt->execute()) {
    header("Location: confirmation.php?status=success");
    exit();

} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
