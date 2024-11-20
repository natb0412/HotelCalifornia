<?php
session_start();
require_once 'Include/functions.php';

$userType = isset($_SESSION['user_id']) ? getUserType($_SESSION['user_id']) : null;
?>

<!DOCTYPE html>
<html lang="no">
<head>
<link rel="stylesheet" href="CSS/main1.css">
    <meta charset="UTF-8">
    <title>Velkommen til Motellet</title>
</head>
<body>
    <h1>Velkommen til Motellet</h1>
    
    <?php if ($userType === 'admin'): ?>
        <h2>Administratorfunksjoner</h2>
        <ul>
            <li><a href="admin/manage_room_types.php">Administrer romtyper</a></li>
            <li><a href="admin/manage_rooms.php">Administrer rom</a></li>
        </ul>
    <?php elseif ($userType === 'guest'): ?>
        <h2>Gjestfunksjoner</h2>
        <ul>
            <li><a href="user/search_rooms.php">Søk etter ledige rom</a></li>
        </ul>
    <?php else: ?>
        <p>Vennligst <a href="auth/login.html">logg inn</a> eller <a href="auth/register.php">registrer deg</a>.</p>
    <?php endif; ?>
</body>
</html>