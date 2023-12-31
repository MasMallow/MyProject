<?php
session_start();
require_once 'db.php';

// Check if the user is logged in and is an admin
if (!isset($_SESSION['admin_login'])) {
    $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
    header('Location: login.php');
    exit;
}

// Fetch all users from the database
$stmt = $conn->prepare("SELECT * FROM users");
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
</head>

<body>
    <h1>Manage Users</h1>
    <a href="ajax.php">กลับหน้าหลัก</a>
    <table>
        <tr>
            <th>ID</th>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>ตำแหน่ง</th>
        </tr>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['firstname']; ?></td>
                <td><?php echo $user['lastname']; ?></td>
                <td><?php echo $user['role']; ?></td>
                <td>
                    <a href="admin_edit_user.php?user_id=<?php echo $user['id']; ?>">แก้ไข</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>
