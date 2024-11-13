<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Personal_info_DB";

$conn = new mysqli($servername, $username, $password, $dbname);

//check connection

if ($conn->connect_error){
    die("Connection Failed: ". $conn->connect_error);
}

//collect form data

$full_name = $_POST['full-name'];
$email = $_POST['email'];
$phone_number = $_POST['phone-number'];
$dob = $_POST['dob'];
$gender = isset($_POST['gender']) ? $_POST['gender']: '';
$street_address = $_POST['street-address'];
$city = $_POST['city'];
$state = $_POST['state'];
$pin_code = $_POST['pin-code'];
$country = $_POST['country'];
$additional_info = $_POST['additional-info'];

$sql = "INSERT INTO personal_info 
        (`Full Name`, `Email`, `Phone Number`, `DOB`, `Gender`, `Street Address`, `City`, `State`, `Pin Code`, `Country`, `Additional`)
        VALUES ('$full_name', '$email', '$phone_number', '$dob', '$gender', '$street_address', '$city', '$state', '$pin_code', '$country', '$additional_info')";

if ($conn->query($sql)===TRUE){
    echo "New record created successfully!!";
}
else{
    echo "Error: ", $sql . "<br>" . $conn->error;
}

$conn->close();

?>
