<?php
// PHP Form Validation and Sanitization

// Initialize variables
$name = $email = $age = '';

// Form validation and sanitization function
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize name
    if (empty($_POST["name"])) {
        echo "Name is required <br>";
    } else {
        $name = sanitizeInput($_POST["name"]);
        // Check if name contains only letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            echo "Only letters and white space allowed for name <br>";
        }
    }

    // Validate and sanitize email
    if (empty($_POST["email"])) {
        echo "Email is required <br>";
    } else {
        $email = sanitizeInput($_POST["email"]);
        // Check if email address is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format <br>";
        }
    }

    // Validate and sanitize age
    if (empty($_POST["age"])) {
        echo "Age is required <br>";
    } else {
        $age = sanitizeInput($_POST["age"]);
        // Check if age is a number
        if (!is_numeric($age)) {
            echo "Age must be a number <br>";
        }
    }
}
?>

