
<?php
include "database.php";

$message = "";

if (isset($_POST['submit'])) {

    $name = $_POST['student_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $class = $_POST['class'];
    $address = $_POST['address'];

    if ($name == "" || $email == "" || $phone == "" || $class == "" || $address == "") {
        $message = "Please fill all the fields.";
    } else {

        $sql = "INSERT INTO students
        (student_name, email, phone, class, address)
        VALUES (?, ?, ?, ?, ?)";

        $stmt = mysqli_prepare($conn, $sql);

        mysqli_stmt_bind_param($stmt, "sssss",
        $name, $email, $phone, $class, $address);

        if (mysqli_stmt_execute($stmt)) {
            $message = "Registration successful! Student details saved.";
        } else {
            $message = "Registration failed. Please try again.";
        }

        mysqli_stmt_close($stmt);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Bright Future Public School</h1>
    <p>Student Registration Form</p>
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="fees.php">Fee Details</a>
    <a href="activities.php">Activities</a>
    <a href="register.php">Registration</a>
</nav>

<div class="container">
    <h2>Student Registration</h2>

    <form method="POST" action="">

        <label>Student Name:</label>
        <input type="text" name="student_name" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Phone Number:</label>
        <input type="tel" name="phone" required>

        <label>Class:</label>
        <select name="class" required>
            <option value="">Select Class</option>
            <option value="1st">1st</option>
            <option value="2nd">2nd</option>
            <option value="3rd">3rd</option>
            <option value="4th">4th</option>
            <option value="5th">5th</option>
            <option value="6th">6th</option>
            <option value="7th">7th</option>
            <option value="8th">8th</option>
            <option value="9th">9th</option>
            <option value="10th">10th</option>
        </select>

        <label>Address:</label>
        <textarea name="address" required></textarea>

        <input type="submit" name="submit" value="Register">

    </form>

    <p><?php echo htmlspecialchars($message); ?></p>
</div>

<footer>
    <p>Bright Future Public School | Contact: 9876543210</p>
</footer>

</body>
</html>
