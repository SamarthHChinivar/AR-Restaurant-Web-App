<?php
// Replace the values in the next line with your database credentials
$conn = mysqli_connect('localhost', 'root', '', 'project');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Escape user inputs for security
$food1 = mysqli_real_escape_string($conn, $_POST['food1']);
$amount1 = mysqli_real_escape_string($conn, $_POST['amount1']);
$food2 = mysqli_real_escape_string($conn, $_POST['food2']);
$amount2 = mysqli_real_escape_string($conn, $_POST['amount2']);
$food3 = mysqli_real_escape_string($conn, $_POST['food3']);
$amount3 = mysqli_real_escape_string($conn, $_POST['amount3']);
$food4 = mysqli_real_escape_string($conn, $_POST['food4']);
$amount4 = mysqli_real_escape_string($conn, $_POST['amount4']);
$food5 = mysqli_real_escape_string($conn, $_POST['food5']);
$amount5 = mysqli_real_escape_string($conn, $_POST['amount5']);

// Attempt insert query execution
$sql = "INSERT INTO food_data (food1, amount1, food2, amount2, food3, amount3, food4, amount4, food5, amount5) VALUES ('$food1', '$amount1', '$food2', '$amount2', '$food3', '$amount3', '$food4', '$amount4', '$food5', '$amount5')";
if (mysqli_query($conn, $sql)) {
    echo "Data added successfully.<br>";
    echo '<a href="./index.php">Back</a>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
