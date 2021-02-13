<?php
// STUB - Login Form
session_start();
include('connection.php');
// TODO - Input from user
$id = $_POST['admit'];
$phone = $_POST['phone'];
// TODO - Fetching data from database
$query = mysqli_query($conn, "SELECT * FROM details WHERE App_id='$id' AND Phone='$phone'");
$rows = mysqli_num_rows($query);
if ($rows) {
    while ($database = mysqli_fetch_assoc($query)) {
        $admit = $database['App_id'];
        $number = $database['Phone'];
    }
    // TODO - Validating user data with database data
    if ($id == $admit && $phone == $number) {
        $_SESSION['id'] = $id;
        $_SESSION['phone'] = $phone;
        // TODO - Redirection url
        header("Location:index.html");
    }
}
// FIXME - Login error
else {
    die("Invalid Credentials!");
    exit;
}
