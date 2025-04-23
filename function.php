function logAction($conn, $user_id, $action) {
    $stmt = $conn->prepare("INSERT INTO AccessLogs (user_id, action) VALUES (?, ?)");
    $stmt->bind_param("is", $user_id, $action);
    $stmt->execute();
}