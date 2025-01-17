<?php include '../db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Create Blog</title>
</head>

<body class="p-6">
    <h1 class="text-2xl font-bold mb-4">Create Blog</h1>
    <form action="" method="POST" enctype="multipart/form-data" class="space-y-4">
        <div>
            <label class="block mb-1">Headline</label>
            <input type="text" name="headline" class="w-full border px-4 py-2">
        </div>
        <div>
            <label class="block mb-1 text-sm font-medium text-gray-700">Content</label>
            <textarea name="content" rows="8"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 resize-y"></textarea>
        </div>
        <div>
            <label class="block mb-1">Image</label>
            <input type="file" name="image" class="block">
        </div>
        <button type="submit" name="submit" class="bg-green-500 text-white px-4 py-2 rounded">Submit</button>
        <a href="index.php"
            class="px-4 py-2 bg-gray-500 text-white rounded-md shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
            Back home
        </a>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $headline = $_POST['headline'];
        $content = $_POST['content'];
        $image = $_FILES['image']['name'];
        $target = "../uploads/" . basename($image);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $conn->query("INSERT INTO blogs (headline, content, image) VALUES ('$headline', '$content', '$image')");
            echo "<p class='text-green-500 mt-4'>Blog created successfully.</p>";
        } else {
            echo "<p class='text-red-500 mt-4'>Failed to upload image.</p>";
        }
    }
    ?>
</body>

</html>