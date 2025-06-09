 <?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
} 

require 'config.php';

$stmt = $pdo->query("SELECT * FROM users");
$students = $stmt->fetchAll(PDO::FETCH_ASSOC);
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="sidebar">
        <h2>STUDENT MANAGEMENT SYSTEM</h2>
        <ul>
            <li><a class="active" href="#">Dashboard</a></li>
            <li><a href="#">Students</a></li>
            <li><a href="#">Courses</a></li>
        </ul>
    </div>

    <div class="main-content">
        <h1>Students</h1>
        <a href="add_student.php" class="add-btn">Add Student</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Course</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $student): ?>
                    <tr>
                        <td><?= htmlspecialchars($student['id']) ?></td>
                        <td><?= htmlspecialchars($student['name']) ?></td>
                        <td><?= htmlspecialchars($student['email']) ?></td>
                        <td><?= htmlspecialchars($student['phone']) ?></td>
                        <td><?= htmlspecialchars($student['course']) ?></td>
                        <td>
                            <a href="edit.php?id=<?= $student['id'] ?>" class="edit-btn">Edit</a>
                            <a href="delete.php?id=<?= $student['id'] ?>" onclick="return confirm('Are you sure?')" class="delete-btn">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
