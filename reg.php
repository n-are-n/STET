<?php
// NOTE - Registration Form
include("connection.php");
// TODO - Testing $data
function test($data)
{
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    return $data;
}
// TODO - Input from user
$name = $_POST['Name'];
$number = $_POST['Number'];
$mail = $_POST['Mail'];
$dob = $_POST['dob'];
$address = test($_POST['Address']);
$position = $_POST['Position'];
$pic = $_POST['Profile-Photo'];
$birth = $_POST['Birth-Certificate'];
$community = $_POST['Community-Certificate'];
$tenth = $_POST['10th-Marksheet'];
$twelve = $_POST['12th-Marksheet'];
$under = $_POST['UG-Certificate'];
$post = $_POST['PG-Certificate'];
// TODO - Validating user existence
$query = mysqli_query($conn, "SELECT * FROM details WHERE Phone='$phone' AND Mail='$mail' ");
// $ternary = $query != '' ? print("Account already exist") : $query;
$row = mysqli_num_rows($query);
if ($row) {
    // TODO - If acc exists
    echo "Account already exists.";
    exit;
}
// TODO - Creating new user acc
else {
    $query = mysqli_query($conn, "INSERT INTO details (Name,Phone,Mail,D_O_B,Address,Position,Pic,Birth,Community,Tenth,Twelve,Under,Post) VALUES ('$name','$number','$mail','$dob','$address','$position','$pic','$birth','$community','$tenth','$twelve','$under','$post')");
    if ($query) {
        // TODO - Redirection Url
        header('Location: login.html');
    }
    // FIXME - Connection error Reporting
    else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
        exit;
    }
}
