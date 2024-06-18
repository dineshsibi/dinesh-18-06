<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vinzo1";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($_SERVER["REQUEST_METHOD"] == "POST") {

$username = $_POST['username'];
$password = $_POST['password'];
}

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if ($username == "UG_SEC_DDE_2024" ) {
    $course_type="UG";

    
}elseif ($username == "PG_SEC_DDE_2024" ) {
    $course_type="PG";

}elseif ($username == "PGDIPLOMA_SEC_DDE_2024" ) {
    $course_type="PGDIPLOMA";

}elseif ($username == "DIPLOMACOURSE_DDE_SEC_2024" ) {
    $course_type="DIPLOMACOURSE";

}elseif ($username == "CERTIFIED_SEC_DDE_2024" ) {
    $course_type="CERTIFIED";

}
else{
    echo "Invalid login credentials";
}
echo $course_type;
