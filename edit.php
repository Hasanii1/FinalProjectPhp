<?php
require 'db.php';
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

$id = $_GET['id'] ?? null;
if (!$id) exit('Student ID is required.');

$stmt = $pdo->prepare("SELECT * FROM students WHERE id = ?");
$stmt->execute([$id]);
$student = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("UPDATE students SET name=?, email=?, phone=?, course=? WHERE id=?");
    $stmt->execute([
        $_POST['name'], $_POST['email'], $_POST['phone'], $_POST['course'], $id
    ]);
    header("Location: index.php");
    exit;
}
?>

<form method="POST">
    <h2>Edit Student</h2>
    <input type="text" name="name" value="<?= htmlspecialchars($student['name']) ?>"><br>
    <input type="email" name="email" value="<?= htmlspecialchars($student['email']) ?>"><br>
    <input type="text" name="phone" value="<?= htmlspecialchars($student['phone']) ?>"><br>
    <input type="text" name="course" value="<?= htmlspecialchars($student['course']) ?>"><br>
    <button type="submit">Update</button>
</form>
