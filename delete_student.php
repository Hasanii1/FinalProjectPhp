<?php
session_start();
if ($_SESSION["role"] !== "admin") {
    header("Location: dashboard.php");
    exit();
}

include 'config.php';

$id = $_GET['id'] ?? null;
if ($id) {
    $stmt = $pdo->prepare("DELETE FROM students WHERE id = ?");
    $stmt->execute([$id]);
}

header("Location: dashboard.php");
exit();
