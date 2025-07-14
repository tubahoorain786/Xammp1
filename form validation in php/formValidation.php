<?php
// Initialize variables
$name = $email = $age = "";
$errors = [];

// Form submission check
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize input
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $age = trim($_POST["age"]);

    // Name validation
    if (empty($name)) {
        $errors[] = "Name is required.";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $errors[] = "Only letters and white space allowed in Name.";
    }

    // Email validation
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Age validation
    if (empty($age)) {
        $errors[] = "Age is required.";
    } elseif (!is_numeric($age) || $age < 1) {
        $errors[] = "Age must be a positive number.";
    }

    // Display output
    if (empty($errors)) {
        echo "<h2>Form Submitted Successfully!</h2>";
        echo "Name: $name<br>";
        echo "Email: $email<br>";
        echo "Age: $age<br>";
    } else {
        echo "<h3>Form Errors:</h3><ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    }
}
?>


<!-- When the form is submitted, it sends the data to process.php using the POST method.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
Checks whether the form was submitted using the POST method.
trim() removes any extra spaces from the beginning and end of the input.


if (empty($name)) {
    $errors[] = "Name is required.";
} elseif (!preg_match("/^[a-zA-Z ]*$/", $name)) {
    $errors[] = "Only letters and white space allowed in Name.";
}
Checks if the name is empty.
Then checks that the name contains only letters and spaces using preg_match().
preg_match() is a PHP function used to check if a string matches a specific pattern using Regular Expressions (regex).
Syntax:

preg_match(pattern, string)
Returns 1 (true) if the pattern matches the string.
Returns 0 (false) if the pattern does not match.
!preg_match(...) means:
"If the string does NOT match the pattern"
The exclamation mark ! is the NOT operator in PHP.



if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
    echo "Invalid name.";
}
💡 Explanation:
The regex pattern ^[a-zA-Z ]*$ means:
"Only letters (a-z, A-Z) and spaces are allowed."
If the name contains numbers or symbols, it doesn’t match the pattern.
So preg_match(...) returns 0 (false), and !preg_match(...) becomes true → showing the error message.






Example in Practice:

$name = "Ali123";

if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
    echo "Invalid name.";
}



if (empty($email)) {
    $errors[] = "Email is required.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format.";
}
Checks if the email is empty.

Then validates that the email has a proper format like example@gmail.com.




if (empty($age)) {
    $errors[] = "Age is required.";
} elseif (!is_numeric($age) || $age < 1) {
    $errors[] = "Age must be a positive number.";
}
Checks if the age is empty.

Then makes sure it’s a positive number using is_numeric().



If there are no errors, it shows the submitted data.

If there are errors, it displays each error in a list. -->


