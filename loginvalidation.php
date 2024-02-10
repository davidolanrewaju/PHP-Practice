<?php
include("middleware/db.php");

//Verify email and password before login
if (isset($_POST['submit'])) {
    //Get data from database
    $get_query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($connection, $get_query);

    if ($result) {
        $userArray = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $userArray[] = $row;
        }

        if(!empty($userArray)) {
            $user = $userArray[0];
            if ($user['email'] == $email && $user['password'] == $password) {
                echo "<h2>Welcome Back</h2>";
            } else {
                echo "Please enter a valid email or password";
            }
        } else {
            echo"User does not exist. Please create an account";
        }
    } else {
        echo "DB Connection Failed";
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