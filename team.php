<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
        <section class="text-center pt-10 mb-10">
            <h2 class="text-2xl font-bold text-blue-600 mb-4">Our Dedicated Team</h2>
            <p class="text-lg leading-relaxed text-gray-700">
                Kami adalah sekelompok individu yang berdedikasi untuk menyediakan informasi terbaik untuk Anda. Berikut
                adalah anggota tim kami.
            </p>
        </section>

        <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <!-- Anggota Tim 1 -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKEAAACUCAMAAADMOLmaAAABnlBMVEX///8+MUXG0+OtPlGLk8I+MEb5vpRLdYdNWmr///3mwp8+RVjo8Pk2LzoAAF4/L0Zw8FhbwEg9KUaurdq0s9NWsUXvwZpBJEs8I0Vp31LY4OtAH0g+S15EakKUnMvM2eqnsdIAAGUvNm1GW0Y8TD86L0xix1RZWYwyNoDq6vF3frMoP3k3P25PU5Rl1FBQmkU9Ok5xeKXy9fhKh0Jcql9QfU55K1zdxqfJyN+7vtoVACBKe0QzGznU1eEAAG47E0RCQkhXUVvQz9EvITdKQU+TjpaxrrLEwsiAfogjDytEiU1DTnJrZG8bIWy7YHBnJV5kcHgxTIAAGYU/YYsXMIIlN3gHABdEZUc0YVM3IlEmIXoZDWcfIF6JirCTk6Z+hpxqcYw/aWYnWV0wGFSwsMFWW3V1YI+ZdZq+lKzUrL+vhKPIeozQjpW9g5ddSn2bXIQ9IGpLQH2URGVPGmFrx2cADVmfPVgULFXXm7FPk2Spi5rJlIuCYXnor5G+kJSJJ06GRHDYsKJfTm5Gel744dSct8a9op19oqzGtaJkaqhFNdAsAAAOx0lEQVR4nO2c+1/aWBqHwRIBL8lOpmWs0koypQQJrdAZC1ZSFQEdSC23cZqAnd0BO2t3HalDt0Nva3fL1P9633OSkHBxts6c2PnBrx81SE7y8F7Oec9JosNxoQtd6EIXutCFLnShAXm96Bv9NH//ufWnhYyHsT41xijFZ3OZwtrGhhNrY62Qyc7GPzUUuFKLv/h6dtO5vJxmKIainE4KiVnZWnYWsutxbbdPiegIZ9acW2nKOSwqveVc20x9Wr5wdnqZZUbh6ZAMu+zMfrq4DGc2tjS60xnhva2NzPky9sIqszHSuaPcvZFB7c65B8pOb/2Ge4fsOJ3VPt65QYY308zH4mEx6QJy9bkBZtMf6WCL0lvZc6LzOuKZ5TPzIW1txs/HiOG19O/hQ2ZcC6OEsRMOHTzlPLuHNVFMOp2yPxZzv9n5/T8xzpydcOjD5779I4Bgx2/tRATC3PQfA0TDT84+P3sds+mP76VPE5OetQ8xDDnyhwkhX2wapqEfLPzebqZf6YI9xa3XsblFBBB13fb4ObdMCNDpXLYlocMbZ6sVfkvMBulQRD7ZJBOEmtKbZMcWVNXlSAWhpi3CvSIg/t7B2CI0CTS2GYYkH1I2rR+YYjTpExTGIvyCosztvl31eSqlzVmdK1myRgyv4dNQ06bQ1Ng5/TEy7Gb+BaBJJ0sWRyG785eebq5STvbOXz5CV6+xFG58tdcWfbytLNHJ1YZmwtVrPX0JvmIsrzV9hzTwtx1oDDtT0zvWtmBEdGBShEZnTbGm0AjNsFY9ojlFEGRFUh/1/R2P5Yx1Z0RMttsuGNGuxbpTy0kU9GamBmtctL77+PH3TVHhakFrDuN9nUazXjoXCFkQQmVdX9NysuwMEoPOpm3qYp2POKXe2PRgNXmOe+Ts22GGYSxN8OhEbayTiUNvr6tBwY508wacYeWrqxbd/CsXa2Q8hvJiVfrrTesOV++xzpVb+vYVJ0ZMZwjgYfWqLurGHaR7q5j2jqlv/qbWsw/9PUKPXxS5v31j2eMOfCr2nr59T3N3ejNOxM1eXLjqoWNxksWJP3CtRsbCh62YV7gfLPugkO291Opgilgp21924TJbi3sd/BEXMiLQ48/n85g1z+cFCMZeehm/tB9aQ2LZbFY1zBfDYh5BCD7UEkSWa1hyTWwCIi/xzBczw01m9D4gTaqSdRqFIfPlZ8P6DgCbyGhtee/Jj3//+4sXL/b3n+zV2jJC/G5Ei89u6zNGapoInyO+1QvDG1eG9FUtlpQ50SOqey+ePnj6j388uHTp0oMHT/+53+LkPF/7arjJlTu6m6ktMhOWdbPwYub69cXcD9JJrnmwrwryjwjNqgc/HapgxcO5Ic3oEUyl14kQZs3qn+obFWA7yHFRkW89PRR+vDSs59sqpIt1eOkXxZBZsMuY5T/0NnMzM1+gCo+dQ11IW9l/tq1KPy39ewQgaLudl9sMJIvV8DNsz4Zk+mxLKt+4jXRnFYy5g7b8ausnxHE0mg+9Jecl/+0BGXGIpytECdmdW0g38fgAGz+3F2L0M+TOUwkvHfKi/PPVW326YhyQDGG8YMYec38OfaHAZO/fv8+FctDJHC2dznekHnJNmbvfrxlKD22GyOqDlVAfUdCx4bumBmAoydPq6SZc4pS2mOdqAxnS2yBEaMllKL+0GhR+BaGrhp6ab41KY13PVZnn81U1qBWuqH5D0utL8oTU6j2LJjk02InCi9MBUX9T5cUmN4kaXGOdzA7a2HESJuw5hb1mnSD9K4Tqmfb+02GwB5qAcAkI+XzrX3gCNUOxV4xZGCYkFYeml9kVdsVQTUE+zisvEMcz+F56+3yI8NnSIbgZRSK0YGESPYN+rzCECS0LNpQhp1MNIUJxD0z47PDw0tvtw+2lpWfPDUo8BgL2kcKDEeU2ZSSIufJAkVpJtCwpwXRNn7ExQbqOqv7aE0BZOpSWnm9zKiCC3hq2fP4MXh1xiFDkgrih1poxegSWTI+d6VUO1OKXhnb8XOChSRiVl5bUVk1ntGpb5ZGbJf+Xpm4YByQ06pnjsjVTfuGQk4EQ9Xr0kyeqqtb2D7h+xu3tpW1kQ77J/WJJspurDFHCXI+Qct7oiceZjAnBwZ2Xb/aq8qs3+weyerQNYAC3faiqRwahzJtNb6wa8+w0mWnAurlySEEg4S+GpWN48inuPbj0/Eh5Mz7++uWbNy9fv+zsHQiKynGcfHCADIq9DNW2yo5YDdsiUx9alg4pCvUY6AQUXcdzk3zrwaW3R62X4z29PgZUBDv+RkWZohGKdFCbgiHA3uHSZAAdlg5xFQumGYxBqD6FXnnv9fgIvcSEqLfhxaK6Os3AJ8TtN3QjMgVChL1UYXdwGXX15zmdsCmq0v7bbbUzCnD8tQCEqiRjL+dv3QlS7DV0gKtXVokmitcxa8yXmdWvsXaCi4tq7CGqGrLfH/xbPRhpwnHfASSK0Gmh4iHCf32DWaS0A+zoffYyqetn4Q1zzYENBoMstbi4KLeAsJ0bP5YP6ONx30jEV+rSYWG8K6FcloPUIprYoPas7mRCy7Bey6hCORcN8dxjj0fNgaGkJ8he3b1Xxz20iVfvOgB9zB2p3fEu9Dd5ie+1XDRGFEJzAG3tSzcii0yo6ZEU83iqu77xN9G7Pvj5rlB4d+zT9Prdq8K7V77x4z1pzzfeUcW8KAVN6fUhlSa02O413czufHazp/8ITY8Y9fmOY3cRlM83MaEDwhZsw6vjjvBm3AdxmFfUr82Wt27j9UiK5Fo7ZDNe6YW53leGfpGKnqba1Ql9vgPllUHo68ocsudxp/XquCNFikVJ/E+v4e3b35DMZE3hb3Uvz8wFgzOarxZlxe0ptiaOQx8Q1DEXCBle9r0LKO80wicdoVIsK/Kk7uGZ4Mzc3Ayur5eJXq7o1YjU4qQhURLdbvmgEQXCCV9XOhG6hpeFk9IB+LnbacUEpViMlMTJSaPhol4ppkl115p6azcWwkm+VHa7I5yyjsNOkoTjCZ8Wjk8kqTMBJuwoklAsFku82Why0RjxCI3JhsxC23IypeIGKTmUGRPdve6EIWDDP+sliMFiRbG0mdR7a5bUlQBD6yah3/RzqQqEkZP/ToxUpxOqFIvlSp8JJ00TEr5Ob/TazKIfa9IvClKlFHG7y1JqJGC30+EiKAgVtcJP+nUtku2te/I6wsZESCf081KlHiiXim53NaYb8cMHC+CHDDZhFYK1LJQqokGoD05h8rc6GAMLhU+UVyr19+DiMnK0chkh3p24u7nb7Xbv6oCZvVKxKKCPABIUXjM9xkPDiQ0qaAM+hR2mVAK/4lOXS4K7XGkAHmiim+l+QBt3AfCxEilWULpjQUJjQkpPEzsU127bRG7OK633v+qnLleUckQJ/PeuVd1Mpq5UI0rFADQQJ9ExmLRNd5PnsJ+B0FNVAr+6LeeuRJSTbA/vw4dsZjeqCIaHdVVLeS0MKUITqBFCwzN0Z/58yfXeem4wo1CpxLLIwR+6mWy2HqpUKlYDantVPX6UbysZu2788updjl+I9gFqjJWSpAgnse9jC9FKqaRUBviwrfN+iuB1nmE+dOfXChAGS9fBx+VixKKqIvVLqfa9XwTeshKBRFkpoOuNtt09h5eZHpUgTapyK3QGtWTZXY5UgsZiki2E+Nmd+Fra2QYnV1uJ+NRZlFSq5aISTK/F7b4TNlxYoWPvy3LCMTt2FiUXaBiifyjYMJZYhW9V3qTr7yOhMwKOBVyVSFkO2X3jPT56mG78CoRnAxz73CVgQrufDEBGbAgNd1GcOiOhyyUXy7LsOI9nA+qhrKfMn9HJSZeLK5er6rk8qSLEdhHh/FkA5wOIsMmriXMwYVze3fSUhRQy4iyoj3QeXo1CT7hcC7S7KXK7dhPC4VNy46HHLafmdUKru+frsXw+FBhiRCZ00W6PqH5vdxzC0QPVhsfjVhqzQ4TzAT7UmE0FWq3kAGPiust1Ijc9Yi0atr+3qUezHo+HuzxMGOB3td125QFEZEJEmOeVlN0doiMei2HCQI/QgJnntSCD70a038kuTIjuE6IT9hLCwWerdXT3D12fGiCcr4e0/hIRhAKDJrwe1QhtThWUKHQSEcqPh2wYuqzvBbVBI2RxcxKZ8Hqr5vGIIhpV7CQE5ZQsvtITQ4TzVkIx7EiosXg4VGs4UoKF8DomFKqIsKrYTrjbyqIrPXxoaoAw0Qo7QlI7laOlkJUQ9zRAKPOeJhByNnvZ66iL2IZiNDxAON9MOertdjhVa9cduVaPUAOEYVmEMBR52t6HhoFwl89qV3oGvYwzJTXlcEzB2Pt4Yb7PgogwD05GNrSbMMc1/PhKT4/Q6BAT8phDfz59Vk4OAi7IeTChWJNtj8MUja/a5rmh4gaGFP1h5TBfn+93MRAqIpIas33Ui4dij9G9htzYMOJCyBuPx8OwCwacT5iArgWVR4R0w/7ipl7FhHRyhBGF2UYjtxvnNR8nr5uArhMOAdYEGx/jMhSXYyhVRhCOjcUAgufl2ICHUWeDCXk0pNhfIAbUUN7fbAdGzAPAuYlEIontaTUgKIoIFTl+HoTxmBxBIf9bM5VBPiCkYcijx87jIWuvIxyieVE+nTA5zAeEsihzDe0AthNCPtOCchAfiZdIBobxQC2lDZXX+Qi5aZeT6BGEI62nqcLBuH0+j9HjArAh0XRgvk9JwDtdJxwtNGz/hyhe83+uJOSAi65GTQmginCqZDW6YJbXdq1veo3/YoPOwMfmA7FTdRId1ML1aCisNcaY9v97mVQ7Njt/mi4PRiO4OTSQJ+QB4+HZlEWzAa7iCozUwsnCoE5OVLre1z5MtkxEh0zGogKkhy6O4ySOPoM4Dt3HhIRfCqEkOiiZ/54APXTgsqbPiUk73OUpAnwaYiqRvExayURqlmS6QNkXHiPEmUyMhcPxuP7x/7iG+rCpqSkUQwmspKFhDkPajqgJtDQPqx37HAaZuKap8KCm9HfsRzhdFgt4dQ1uGy8/AZx+eWXw7CNeGw3OHVNjGTTPkMG8lrfOB+xCF7rQhS50odP0P8KjoK5i0qIOAAAAAElFTkSuQmCC"
                    alt="Member 1" class="w-32 h-32 mx-auto rounded-full mb-4" />
                <h3 class="text-xl font-bold text-blue-600">M. Mardlian Nurofiq</h3>
                <p class="text-sm text-gray-600 mb-2">Web Developer</p>
                <p class="text-gray-700">John adalah pengembang web yang ahli dalam membangun aplikasi modern dan
                    responsif.</p>
            </div>

            <!-- Anggota Tim 2 -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <img src="data:image/png;base64,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"
                    alt="Member 2" class="w-32 h-32 mx-auto rounded-full mb-4">
                <h3 class="text-xl font-bold text-blue-600">Widirga Putri A.P</h3>
                <p class="text-sm text-gray-600 mb-2">UI/UX Designer</p>
                <p class="text-gray-700">Jane memiliki pengalaman bertahun-tahun dalam merancang antarmuka pengguna yang
                    intuitif.</p>
            </div>

            <!-- Anggota Tim 3 -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <img src="data:image/png;base64,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"
                    alt="Member 3" class="w-32 h-32 mx-auto rounded-full mb-4">
                <h3 class="text-xl font-bold text-blue-600">Affila Riyan Kefanu</h3>
                <p class="text-sm text-gray-600 mb-2">Content Writer</p>
                <p class="text-gray-700">Michael adalah penulis konten berbakat yang fokus pada artikel berkualitas
                    tinggi.</p>
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

                <a href="https://vokasi.unesa.ac.id/"
                    class="mt-8 inline-block rounded-full border border-white px-12 py-3 text-sm font-medium text-white hover:bg-indigo-600 hover:text-white focus:outline-none focus:ring active:bg-indigo-500">
                    Selengkapnya
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