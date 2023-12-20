<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <h2>User Registration</h2>
    <p>Please complete the following form to register with our site:</p>
    <form action="" method="post">
        <label for="user-name">User Name:</label>
        <input type="text" id="user-name" name="user-name"><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br>

        <label for="confirm-password">Confirm Password:</label>
        <input type="password" id="confirm-password" name="confirm-password"><br><br>

        <label for="gender">Gender:</label><br>

        <input type="radio" name="gender" id="male">
        <label for="male">Male</label><br>

        <input type="radio" name="gender" id="female">
        <label for="female">Female</label><br>

        <input type="submit" name="button" id="button" value="Register Now">
    </form>
</body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = array();
    $username=$_POST["user-name"];
    $password=$_POST["password"];
    $cpassword=$_POST["confirm-password"];
    $email=$_POST["email"];
    // Validate User Name
    if (empty($username)) {
        $errors["user-name"] = "User Name is required";
    }
    elseif(strlen($username)<7){
        $errors["username-length"] = "Username length should be greater than 7";
    }

    if (empty($email)) {
        $errors["email"] = "Email is required";
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors["email-type"] = "Email is not valid";
    }
    // Validate Password
    if (empty($_POST["password"])) {
        $errors["password"] = "Password is required";
    }
    

    // Validate Confirm Password
    if (empty($_POST["confirm-password"])) {
        $errors["confirm-password"] = "Confirm Password is required";
    } elseif ($_POST["password"] != $_POST["confirm-password"]) {
        $errors["confirm-password"] = "Passwords do not match";
    }

    // Validate Gender
    if (!isset($_POST["gender"])) {
        $errors["gender"] = "Gender is required";
    }

    // Check if there are any errors
    if (count($errors) > 0) {
        // Display the errors
        foreach ($errors as $key => $error) {
            echo ucfirst($key) . ": " . $error . "<br>";
        }
    } else {
        // Form is valid, process the data
        // You can add your own code here to handle the form submission
        echo "Form submitted successfully!";
    }
}
?>

</html>
