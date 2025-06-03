<?php
session_start();
if ($_SESSION["role"] !== "admin") {
    header("Location: dashboard.php");
    exit();
}

include 'config.php';

$id = $_GET['id'] ?? null;
if (!$id) {
    header("Location: dashboard.php");
    exit();
}

$stmt = $pdo->prepare("SELECT * FROM students WHERE id = ?");
$stmt->execute([$id]);
$student = $stmt->fetch();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $pdo->prepare("UPDATE students SET name = ?, email = ?, course = ?, grade = ? WHERE id = ?");
    $stmt->execute([
        $_POST["name"], $_POST["email"], $_POST["course"], $_POST["grade"], $id
    ]);
    header("Location: dashboard.php");
    exit();
}
?>

<form method="POST">
    <input name="name" value="<?= htmlspecialchars($student['name']) ?>" required>
    <input name="email" value="<?= htmlspecialchars($student['email']) ?>" required>
    <input name="course" value="<?= htmlspecialchars($student['course']) ?>" required>
    <input name="grade" value="<?= htmlspecialchars($student['grade']) ?>" required>
    <button type="submit">Update Student</button>
</form>
