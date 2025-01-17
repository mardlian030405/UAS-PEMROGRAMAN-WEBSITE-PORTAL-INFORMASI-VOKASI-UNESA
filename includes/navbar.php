<header class="bg-indigo-900">
    <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="md:flex md:items-center md:gap-12">
                <a class="block text-white font-bold text-2xl" href="/">
                    <h1>SEPUTAR VOKASI</h1>
                </a>
            </div>

            <div class="hidden md:block" id="nav-menu">
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
                        <a class="rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-indigo-900"
                            href="admin/register.php">
                            Register
                        </a>
                    </div>
                </div>

                <div class="block md:hidden">
                    <button id="hamburger-btn"
                        class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div id="mobile-menu" class="hidden md:hidden">
        <nav aria-label="Global">
            <ul class="flex flex-col items-start gap-4 p-4 text-sm bg-indigo-900 text-white">
                <li>
                    <a class="transition hover:text-gray-500/75" href="/about.php"> About </a>
                </li>
                <li>
                    <a class="transition hover:text-gray-500/75" href="/team.php"> Team </a>
                </li>
                <li>
                    <a class="transition hover:text-gray-500/75" href="/blog.php"> Blog </a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<script>
document.getElementById('hamburger-btn').addEventListener('click', function() {
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.classList.toggle('hidden');
});
</script>