<?php
// Include your database connection script here
$con = mysqli_connect('localhost', 'root');
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_select_db($con, 'toursproject');

// Login Code
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $username = check_input($_POST["username"]);
    $password = check_input($_POST["password"]);

    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($con, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $row['password'])) {
            session_start();
            $_SESSION['user_id'] = $row['id'];
            // Redirect to index.php with a success parameter
            header('location: index.php?login=success');
            exit();
        } else {
            $Error = "Invalid password. Please try again.";
        }
    } else {
        $Error = "Invalid username. Please try again.";
    }
}

function check_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Add your head content, including CSS and JS libraries -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - TSSB Tourism</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <style>
        /* Add custom styles for the login page */
        body {
            background-image: url('images/michael-humphries-Z_6_ezJV-m0-unsplash.jpg');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .signup-container { /* Applying styles from your signup page */
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            width: 400px;
        }
    </style>
</head>
<body>


<div class="container d-flex justify-content-center align-items-center h-100">
        <div class="signup-container"> <!-- Using the same style -->
            <h3 class="text-center">Login</h3>
            <form method="post" action="login.php">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" require>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label" >Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" require>
                </div>
                <button type="submit" name="login" class="btn btn-primary btn-block" id="login-button">Login</button>
                <p class="text-center mt-3">
                    Don't have an account? <a href="signup.php">Sign Up</a>
                </p>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <!-- Include Bootstrap and jQuery libraries here -->

    <script>
        // Check if the error message is set and display a JavaScript alert
        <?php if (isset($Error) && !empty($Error)) : ?>
            alert("<?php echo $Error; ?>");
        <?php endif; ?>
    </script>
</body>
</html>
