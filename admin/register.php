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

<body class="bg-gradient-to-r from-blue-100 via-purple-100 to-pink-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8">
        <h1 class="text-3xl font-bold text-gray-800 text-center mb-6">Create Account</h1>
        <?php if ($message): ?>
        <p class="text-red-500 text-center mb-4"><?= htmlspecialchars($message); ?></p>
        <?php endif; ?>
        <form method="POST" class="space-y-5">
            <!-- Username -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" name="username" required
                    class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
            <!-- Password -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" required
                    class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
            <!-- Confirm Password -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Confirm Password</label>
                <input type="password" name="confirm_password" required
                    class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
            <!-- Submit Button -->
            <button type="submit"
                class="w-full bg-gradient-to-r from-indigo-500 to-purple-500 text-white text-lg font-semibold py-2 rounded-lg shadow-md hover:from-indigo-600 hover:to-purple-600 focus:ring-2 focus:ring-indigo-400 focus:ring-offset-2">
                Register
            </button>
        </form>
        <!-- Footer -->
        <p class="text-sm text-gray-500 text-center mt-6">Already have an account?
            <a href="login.php" class="text-indigo-500 hover:text-indigo-700 font-semibold">Login</a>
        </p>
    </div>
</body>

</html>