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

    <main class="container mx-auto px-4 py-10">
        <section class="bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-2xl font-bold text-blue-600 mb-4">About Portal Informasi Seputar Vokasi</h2>
            <p class="text-lg leading-relaxed mb-4">
                Selamat datang di Portal Informasi Seputar Vokasi! Kami hadir sebagai pusat informasi terpercaya untuk
                dunia pendidikan vokasi di Indonesia. Tujuan kami adalah menjadi jembatan antara pelajar, pendidik, dan
                industri dalam mendukung pengembangan keterampilan kerja yang relevan dengan kebutuhan masa kini.
            </p>
            <p class="text-lg leading-relaxed mb-4">
                Pendidikan vokasi memiliki peran penting dalam mencetak tenaga kerja profesional yang siap bersaing di
                dunia kerja. Melalui portal ini, kami menyediakan informasi terkini seputar program vokasi, peluang
                karir, pelatihan, serta berbagai tips untuk meningkatkan kompetensi.
            </p>
            <img src="uploads/about.png" alt="Pendidikan Vokasi" class="rounded-lg shadow-lg mx-auto mb-4">
        </section>

        <section class="mt-10">
            <div class="bg-blue-50 p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold text-blue-600 mb-4">Visi dan Misi Kami</h2>
                <p class="text-lg leading-relaxed">
                    <strong>Visi:</strong> Menjadi platform utama untuk mendukung kemajuan pendidikan vokasi di
                    Indonesia.
                </p>
                <p class="text-lg leading-relaxed">
                    <strong>Misi:</strong>
                </p>
                <ul class="list-disc pl-6 text-lg">
                    <li>Menyediakan informasi terbaru seputar program dan peluang vokasi.</li>
                    <li>Menghubungkan pelajar vokasi dengan dunia industri melalui artikel dan pelatihan.</li>
                    <li>Mendukung peningkatan keterampilan kerja melalui edukasi yang relevan.</li>
                </ul>
            </div>
        </section>

        <section class="mt-10">
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-2xl font-bold text-blue-600 mb-4">Hubungi Kami</h2>
                <p class="text-lg leading-relaxed mb-4">
                    Kami senang mendengar masukan, saran, atau pertanyaan dari Anda. Hubungi kami melalui:
                </p>
                <div class="text-blue-600 font-semibold">
                    Email: <a href="mailto:info@portalvokasi.com" class="underline">info@portalvokasi.com</a><br>
                    Telepon: +62 812 3456 7890
                </div>
            </div>
        </section>
    </main>
    <?php include "includes/footer.php"; ?>

</body>

</html>