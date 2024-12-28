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
    <header class="bg-indigo-900">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="md:flex md:items-center md:gap-12">
                    <a class="block text-white font-bold text-2xl" href="/">
                        <h1>SEPUTAR VOKASI</h1>
                    </a>
                </div>

                <div class="hidden md:block">
                    <nav aria-label="Global">
                        <ul class="flex items-center gap-6 text-sm">
                            <li>
                                <a class="text-white transition hover:text-gray-500/75" href="/about.php"> About </a>
                            </li>

                            <li>
                                <a class="text-white transition hover:text-gray-500/75" href="/team.php"> Team </a>
                            </li>

                            <li>
                                <a class="text-white transition hover:text-gray-500/75" href="/blog.php"> Blog </a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="flex items-center gap-4">
                    <div class="sm:flex sm:gap-4">
                        <a class="rounded-md bg-white px-5 py-2.5 hover:bg-indigo-900 hover:text-white text-sm font-medium text-indigo-900 shadow"
                            href="admin/index.php">
                            Login
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

    <footer class="bg-indigo-800">
        <div class="mx-auto max-w-screen-xl px-4 pb-8 pt-16 sm:px-6 lg:px-8 lg:pt-24">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-white sm:text-5xl">PORTAL INFORMASI SEPUTAR VOKASI</h2>

                <p class="mx-auto mt-4 max-w-sm text-white">
                    OFFICIAL WEBSITE PORTAL INFORMASI SEPUTAR VOKASI
                </p>

                <a href="#"
                    class="mt-8 inline-block rounded-full border border-white px-12 py-3 text-sm font-medium text-white hover:bg-indigo-600 hover:text-white focus:outline-none focus:ring active:bg-indigo-500">
                    Get Started
                </a>
            </div>

            <div class="mt-16 border-t border-gray-100 pt-8 sm:flex sm:items-center sm:justify-between lg:mt-24">
                <ul class="flex flex-wrap justify-center gap-4 text-xs lg:justify-end">
                    <li>
                        <a href="#" class="text-white transition hover:opacity-75"> Terms & Conditions </a>
                    </li>

                    <li>
                        <a href="#" class="text-white transition hover:opacity-75"> Privacy Policy </a>
                    </li>

                    <li>
                        <a href="#" class="text-white transition hover:opacity-75"> Cookies </a>
                    </li>
                </ul>

                <ul class="mt-8 flex justify-center gap-6 sm:mt-0 lg:justify-end">
                    <li>
                        <a href="#" rel="noreferrer" target="_blank" class="text-white transition hover:opacity-75">
                            <span class="sr-only">Facebook</span>

                            <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>

                    <li>
                        <a href="#" rel="noreferrer" target="_blank" class="text-white transition hover:opacity-75">
                            <span class="sr-only">Instagram</span>

                            <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>

                    <li>
                        <a href="#" rel="noreferrer" target="_blank" class="text-white transition hover:opacity-75">
                            <span class="sr-only">Twitter</span>

                            <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>
                    </li>

                    <li>
                        <a href="#" rel="noreferrer" target="_blank" class="text-white transition hover:opacity-75">
                            <span class="sr-only">GitHub</span>

                            <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>