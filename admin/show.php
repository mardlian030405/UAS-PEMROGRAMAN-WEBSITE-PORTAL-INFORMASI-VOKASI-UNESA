<?php
include '../db.php';

// Validasi apakah parameter ID ada
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk mendapatkan detail blog berdasarkan ID
    $stmt = $conn->prepare("SELECT * FROM blogs WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Jika data ditemukan, fetch menjadi array
    if ($result->num_rows > 0) {
        $blog = $result->fetch_assoc();
    } else {
        die("Blog not found.");
    }
} else {
    die("Invalid request.");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Blog Details</title>
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <!-- Header -->
    <header class="bg-blue-600 text-white py-4">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl font-bold">Blog Details</h1>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-6">
        <div class="bg-white shadow-md rounded-lg p-6">
            <!-- Blog Headline -->
            <h2 class="text-2xl font-bold mb-4"><?= htmlspecialchars($blog['headline']); ?></h2>

            <!-- Blog Image -->
            <div class="mb-6">
                <img src="../uploads/<?= htmlspecialchars($blog['image']); ?>" alt="Blog Image"
                    class="rounded-lg shadow-md w-full h-auto object-cover">
            </div>

            <!-- Blog Content -->
            <p class="text-gray-700 text-justify leading-relaxed"><?= nl2br(htmlspecialchars($blog['content'])); ?></p>

            <!-- Back Button -->
            <a href="/" class="mt-6 inline-block bg-blue-500 hover:bg-blue-700 text-white px-6 py-2 rounded shadow">
                Back to Admin Panel
            </a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4 mt-6">
        <div class="container mx-auto text-center">
            <p>&copy; <?= date('Y'); ?> Admin Panel - Blog. All Rights Reserved.</p>
        </div>
    </footer>
</body>

</html>