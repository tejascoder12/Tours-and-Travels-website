<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $con = mysqli_connect('localhost', 'root');

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    mysqli_select_db($con, 'toursproject');

    $user = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password

    $query = "INSERT INTO users (username, email, password) VALUES ('$user', '$email', '$password')";

    if (mysqli_query($con, $query)) {
        // Registration successful, you can now redirect to the login page or another page
        header('location: login.php');
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($con);
    }

    mysqli_close($con);
}
?>
