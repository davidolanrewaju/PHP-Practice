<?php
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        if ($email && $password !== null) {
            if(strlen($password) >= 6) {
                echo'Login Successful';
            }
            else{
                echo'Password should be at least 6 characters';
            }
        }
        else {
            echo'Please log in';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
    <h2>FORM VALIDATION</h2>

    <div class="form-container">
        <form action="form.php" method="post">
            <input type="email" name="email" placeholder="Enter your email"><br>
            <input type="password" name="password" placeholder="Enter your password"><br>
            <input type="submit" name="submit" value="Log In"> 
        </form>
    </div>
</body>
</html>