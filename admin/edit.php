<?php 
include '../db.php'; 

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM blogs WHERE id = $id");
    $blog = $result->fetch_assoc();
}

if (isset($_POST['submit'])) {
    $headline = $_POST['headline'];
    $content = $_POST['content'];
    $image = $_FILES['image']['name'];
    $target = "../uploads/" . basename($image);

    if ($image) {
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
        $conn->query("UPDATE blogs SET headline='$headline', content='$content', image='$image' WHERE id=$id");
    } else {
        $conn->query("UPDATE blogs SET headline='$headline', content='$content' WHERE id=$id");
    }
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Edit Blog</title>
</head>

<body class="p-6">
    <x-navbar></x-navbar>
    <div>
        <h1 class="text-3xl font-bold text-gray-800 text-center mb-6">Edit Blog</h1>
        <form action="" method="POST" enctype="multipart/form-data" class="space-y-6">
            <div>
                <label class="block text-sm font-medium text-gray-700">Headline</label>
                <input type="text" name="headline" value="<?= $blog['headline']; ?>" required
                    class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block mb-1 text-sm font-medium text-gray-700">Content</label>
                <textarea name="content" rows="8"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 resize-y"></textarea>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Image</label>
                <input type="file" name="image" class="mt-2">
                <p class="mt-2 text-sm text-gray-600">Current Image:</p>
                <img src="../uploads/<?= $blog['image']; ?>" alt="Current Image"
                    class="w-32 h-32 mt-2 rounded-lg shadow-md border border-gray-200">
            </div>
            <div class="flex justify-end">
                <button type="submit" name="submit"
                    class="bg-gradient-to-r from-blue-500 to-indigo-500 text-white font-semibold px-6 py-2 rounded-lg shadow hover:from-blue-600 hover:to-indigo-600 focus:ring-2 focus:ring-indigo-400 focus:ring-offset-2">
                    Update
                </button>
            </div>
        </form>
    </div>

</body>

</html>