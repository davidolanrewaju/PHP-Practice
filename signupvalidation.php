<?php
$email = $_POST['email'];
$password = $_POST['password'];

//Connect to phpmyadmin database
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
if ($connection) {
    echo 'DB Connection successful <br>';
} else {
    die("DB Connection Failed <br>");
}

//Add email and password to database from form
if (isset($_POST['submit'])) {
    if ($email && $password !== null) {
        if (strlen($password) >= 6) {
            $post_query = "INSERT INTO users(email, password) VALUES ('$email', '$password')";
            $posted_data = mysqli_query($connection, $post_query);

            if (!$posted_data) {
                die('Query Failed <br>');
            }
            echo '<h2>SignUp Successful</h2>';
        } else {
            echo 'Password should be at least 6 characters';
        }
    } else {
        echo 'Fields cannot be blank';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>

<body>
    
</body>

</html>