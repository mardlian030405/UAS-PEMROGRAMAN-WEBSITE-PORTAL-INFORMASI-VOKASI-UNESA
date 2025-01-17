<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Seputar Vokasi</title>
</head>

<body>
    <?php include "includes/navbar.php"; ?>

    <section class="p-6 bg-gray-50" style="
      background-image: url('https://www.unesa.ac.id/images/foto-29-06-2023-09-02-11-4787.png');
      background-size: cover; /* Memastikan gambar mencakup seluruh elemen */
      background-position: center; /* Pusatkan gambar */
      background-repeat: no-repeat; /* Hindari pengulangan gambar */
      height: 60vh; /* Pastikan tinggi sesuai layar penuh */
    ">
        <div class="mx-auto max-w-screen-xl px-4 py-32 lg:flex h-600 lg:items-center">
            <div class="mx-auto max-w-xl text-center">
                <h1 class="text-3xl text-white font-extrabold sm:text-5xl">
                    Selamat Datang
                    <strong class="font-extrabold text-white sm:block"> Blog Seputar Vokasi Unesa </strong>
                </h1>

                <p class="mt-4 text-white font-bold sm:text-xl/relaxed">
                    Menyajikan informasi terupdate mengenai vokasi unesa
                </p>
            </div>
        </div>
    </section>


    <div class="container mx-auto px-4 py-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <?php
            $result = $conn->query("SELECT * FROM blogs ORDER BY id DESC");
            while ($row = $result->fetch_assoc()) {
                echo "
                <div class='bg-white shadow-md rounded-lg p-4'>
                    <img src='uploads/{$row['image']}' alt='Blog Image' class='w-full h-96 object-cover rounded-lg mb-4'>
                    <h2 class='text-xl font-bold mb-2 text-justify'>" . htmlspecialchars($row['headline']) . "</h2>
                    <p class='text-gray-700 truncate'>" . htmlspecialchars(substr($row['content'], 0, 100)) . "...</p>
                    <a href='admin/show.php?id={$row['id']}' class='mt-4 inline-block bg-blue-500 hover:bg-blue-700 text-white px-6 py-2 rounded shadow'>
                        Show More
                    </a>
                </div>";
            }
            ?>
        </div>
    </div>

    <?php include "includes/footer.php"; ?>
</body>

</html>