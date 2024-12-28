<?php
include '../db.php';

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    if ($password !== $confirmPassword) {
        $message = 'Passwords do not match!';
    } else {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $conn->prepare("INSERT INTO admins (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $hashedPassword);

        if ($stmt->execute()) {
            header("Location: login.php");
            exit();
        } else {
            $message = 'Error: ' . $conn->error;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Register</title>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto max-w-md mt-10">
        <h1 class="text-2xl font-bold text-center mb-6">Register</h1>
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
            <div class="mb-4">
                <label class="block text-gray-700">Confirm Password</label>
                <input type="password" name="confirm_password" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded">Register</button>
        </form>
    </div>
</body>

</html>