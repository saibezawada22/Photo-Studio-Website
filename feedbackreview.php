<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $rating = $_POST['rating'];
    $comments = $_POST['comments'];

    $conn = new mysqli('localhost', 'root', '', 'test');
    if($conn->connect_error){
        die('Connection failed: '.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("INSERT INTO feedback (name, email, rating, comments) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $rating, $comments);
        if ($stmt->execute() === TRUE) {
            echo "Feedback submitted successfully";
        } else {
            echo "Error: " . $conn->error;
        }
        $stmt->close();
        $conn->close();
    }
}
?>
