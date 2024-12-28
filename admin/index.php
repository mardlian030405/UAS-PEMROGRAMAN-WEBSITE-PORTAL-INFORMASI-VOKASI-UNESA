<?php include '../db.php'; 
include 'auth.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Admin Panel - Blog</title>
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <!-- Header -->
    <header class="bg-indigo-600">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="md:flex md:items-center md:gap-12">
                    <a class="block text-white font-bold" href="/">
                        <h1>SEPUTAR VOKASI</h1>
                    </a>
                </div>

                <div class="hidden md:block">
                    <nav aria-label="Global">
                        <ul class="flex items-center gap-6 text-sm">
                            <li>
                                <a class="text-white transition hover:text-gray-500/75" href="#"> About </a>
                            </li>

                            <li>
                                <a class="text-white transition hover:text-gray-500/75" href="#"> Careers </a>
                            </li>

                            <li>
                                <a class="text-white transition hover:text-gray-500/75" href="#"> Blog </a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="flex items-center gap-4">
                    <div class="sm:flex sm:gap-4">
                        <a class="rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white shadow"
                            href="logout.php">
                            Logout
                        </a>

                        <div class="hidden sm:flex">
                            <a class="rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-teal-600"
                                href="admin/register.php">
                                Register
                            </a>
                        </div>
                    </div>

                    <div class="block md:hidden">
                        <button class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-6">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold">Manage Blogs</h2>
            <a href="create.php" class="bg-blue-500 hover:bg-blue-700 text-white px-6 py-2 rounded shadow">
                + Create New Blog
            </a>
        </div>

        <!-- Table -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full table-auto">
                <thead class="bg-blue-500 text-white">
                    <tr>
                        <th class="px-4 py-3 text-left">#</th>
                        <th class="px-4 py-3 text-left">Image</th>
                        <th class="px-4 py-3 text-left">Headline</th>
                        <th class="px-4 py-3 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = $conn->query("SELECT * FROM blogs");
                    while ($row = $result->fetch_assoc()) {
                        echo "
                        <tr class='border-t'>
                            <td class='px-4 py-3'>{$row['id']}</td>
                            <td class='px-4 py-3'>
                                <img src='../uploads/{$row['image']}' alt='Blog Image' class='w-16 h-16 rounded shadow-md'>
                            </td>
                            <td class='px-4 py-3'>{$row['headline']}</td>
                            <td class='px-4 py-3'>
                                <div class='flex space-x-2'>
                                    <a href='edit.php?id={$row['id']}' class='bg-yellow-400 hover:bg-yellow-500 text-white px-4 py-2 rounded shadow'>
                                        Edit
                                    </a>
                                    <a href='delete.php?id={$row['id']}' onclick='return confirm(\"Are you sure you want to delete this blog?\")' class='bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded shadow'>
                                        Delete
                                    </a>
                                </div>
                            </td>
                        </tr>";
                    }
                    ?>
                </tbody>
            </table>
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