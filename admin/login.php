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
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="w-full max-w-sm bg-white rounded-lg shadow-lg p-8">
            <h1 class="text-3xl font-semibold text-gray-800 text-center mb-6">Admin Login</h1>
            <?php if ($message): ?>
            <p class="text-red-500 text-center mb-4"><?= htmlspecialchars($message); ?></p>
            <?php endif; ?>
            <form method="POST" class="space-y-5">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="text" name="username" required
                        class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" required
                        class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                <button type="submit"
                    class="w-full bg-gradient-to-r from-blue-500 to-indigo-500 text-white text-lg font-semibold py-2 rounded-lg hover:from-blue-600 hover:to-indigo-600 focus:ring-2 focus:ring-indigo-400 focus:ring-offset-2">
                    Login
                </button>
            </form>
            <p class="text-sm text-gray-500 text-center mt-6">© 2025 Your Company. All rights reserved.</p>
        </div>
    </div>

</body>

</html>