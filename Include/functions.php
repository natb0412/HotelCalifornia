<?php
function getUserType($userId)
{
    $conn = getDbConnection();
    $stmt = $conn->prepare("SELECT user_type FROM users WHERE id = ?");
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    
    $stmt->close();
    $conn->close();

    return $user ? $user['user_type'] : null;
}
?>