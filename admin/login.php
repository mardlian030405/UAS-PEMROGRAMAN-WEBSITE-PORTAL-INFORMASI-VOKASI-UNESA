<?php
session_start();
include '../db.php';

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM admins WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $admin = $result->fetch_assoc();
        if (password_verify($password, $admin['password'])) {
            $_SESSION['admin_id'] = $admin['id'];
            header("Location: index.php");
            exit();
        } else {
            $message = 'Invalid password.';
        }
    } else {
        $message = 'User not found.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto max-w-md mt-10">
        <h1 class="text-2xl font-bold text-center mb-6">Admin Login</h1>
        <?php if ($message): ?>
        <p class="text-red-500 text-center"><?= htmlspecialchars($message); ?></p>
        <?php endif; ?>
        <form method="POST" class="bg-white shadow-md rounded-lg p-6">
            <div class="mb-4">
                <label class="block text-gray-700">Username</label>
                <input type="text" name="username" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Password</label>
                <input type="password" name="password" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded">Login</button>
        </form>
    </div>
</body>

</html>