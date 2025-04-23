<?php
include_once("connection.php");
 if (lisset($_SESSION['user_id'])){
    header("Location: dashboard.php");
    exit();
 }

 $user_id =$_SESSION['user_id'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $target_dir = "uploads/";
        $file = $_FILES["profile_picture"];
        $filename = basename($file["name"]);
        $target_file = $target_dir . $filename;
    
        if (move_uploaded_file($file["tmp_name"], $target_file)) {
            $stmt = $conn->prepare("UPDATE Users SET profile_picture = ? WHERE user_id = ?");
            $stmt->bind_param("si", $filename, $user_id);
            $stmt->execute();
            echo "<p>Profile picture updated!</p>";
        } else {
            echo "<p>Upload failed.</p>";
        }
 }