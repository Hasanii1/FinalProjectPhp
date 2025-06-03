<nav>
    <a href="dashboard.php">Dashboard</a>
    <?php if ($_SESSION["role"] === "admin"): ?>
        | <a href="add_student.php">Add Student</a>
    <?php endif; ?>
    | <a href="logout.php">Logout</a>
</nav>
<hr>




<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

include 'config.php';

$is_admin = $_SESSION["role"] === "admin";

$students = $pdo->query("SELECT * FROM students")->fetchAll();
?>

<h2>Welcome <?= $is_admin ? "Admin" : "User" ?></h2>

<?php if ($is_admin): ?>
    <a href="add_student.php">Add Student</a>
<?php endif; ?>

<table>
    <tr>
        <th>Name</th><th>Email</th><th>Course</th><th>Grade</th>
        <?php if ($is_admin): ?><th>Actions</th><?php endif; ?>
    </tr>
    <?php foreach ($students as $student): ?>
    <tr>
        <td><?= htmlspecialchars($student['name']) ?></td>
        <td><?= htmlspecialchars($student['email']) ?></td>
        <td><?= htmlspecialchars($student['course']) ?></td>
        <td><?= htmlspecialchars($student['grade']) ?></td>
        <?php if ($is_admin): ?>
            <td>
                <a href="edit_student.php?id=<?= $student['id'] ?>">Edit</a>
                <a href="delete_student.php?id=<?= $student['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        <?php endif; ?>
    </tr>
    <?php endforeach; ?>
</table>
