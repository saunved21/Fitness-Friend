<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];

    // Validate form data (you can add more validation as needed)
    if (empty($name)) {
        $nameErr = "Name is required";
    }
    if (empty($mobile)) {
        $mobileErr = "Mobile number is required";
    }
    if (empty($email)) {
        $emailErr = "Email address is required";
    }

    // If no errors, process form data
    if (empty($nameErr) && empty($mobileErr) && empty($emailErr)) {
        // Connect to MySQL database (assuming you have XAMPP with default settings)
        $conn = mysqli_connect("localhost", "root", "", "gym");
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Insert form data into database
        $sql = "INSERT INTO jim (name, mobile, email) VALUES ('$name', '$mobile', '$email')";
        if (mysqli_query($conn, $sql)) {
            echo "Registration successful";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        // Close database connection
        mysqli_close($conn);
    }
}
?>