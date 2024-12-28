<?php 
include '../db.php'; 

// Ambil data berdasarkan ID
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

    if ($image) { // Jika ada file yang diupload
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
        $conn->query("UPDATE blogs SET headline='$headline', content='$content', image='$image' WHERE id=$id");
    } else { // Jika tidak ada file yang diupload
        $conn->query("UPDATE blogs SET headline='$headline', content='$content' WHERE id=$id");
    }

    echo "<p class='text-green-500 mt-4'>Blog updated successfully.</p>";
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
    <h1 class="text-2xl font-bold mb-4">Edit Blog</h1>
    <form action="" method="POST" enctype="multipart/form-data" class="space-y-4">
        <div>
            <label class="block mb-1">Headline</label>
            <input type="text" name="headline" value="<?= $blog['headline']; ?>" class="w-full border px-4 py-2">
        </div>
        <div>
            <label class="block mb-1">Content</label>
            <textarea name="content" class="w-full border px-4 py-2"><?= $blog['content']; ?></textarea>
        </div>
        <div>
            <label class="block mb-1">Image</label>
            <input type="file" name="image" class="block">
            <p class="mt-2 text-sm">Current Image: <img src="../uploads/<?= $blog['image']; ?>" alt="Current Image"
                    class="w-32 mt-2"></p>
        </div>
        <button type="submit" name="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
    </form>
</body>

</html>