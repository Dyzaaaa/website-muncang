@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/resources/css/app.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Landingpage</title>
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>

<body>

    <!-- Hero Section Start -->
    <section id="home" class="pt-36">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 items-center">
                <div class="mt-24">
                    <h1 class="text-base font-semibold text-primary md:text-xl">Halo semua🖐️, Selamat Datang di <span
                            class="block font-bold text-dark text-4xl mt-1">Sistem Pelayanan Desa Muncang</span></h1>
                    <h2 class="font-semibold text-secondary text-lg mb-2
                    "><span
                            class="text-dark">Aplikasi | Web | Penyuratan</span></h2>
                    <p class="font-med text-secondary mb-10 leading-relaxed">RAMAH
                    </p>
                    <a href="#"
                        class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Hubungi
                        Saya</a>
                </div>
                <div class="mt-10 lg:mt-9 lg:ml-64">
                    <img src="/img/Kabupaten_Pemalang.png" alt="my picture" class="h-96">
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Section Start -->
    <section id="about" class="pt-36 pb-32">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10 lg:w-1/2">
                    <h4 class="font-bold uppercase text-primary text-lg mb-3">Tentang Desa Muncang</h4>
                    <h2 class="font-bold text-dark text-3xl mb-5
                    max-w-md lg:text-4xl">Get to Know
                        Muncang!</h2>
                    <p class="font-med text-base text-secondary max-w-xl lg:text-lg">Secara umum, potensi yang ada dari
                        Desa Muncang adalah dalam sektor pertanian dan peternakan. Bidang pertanian dengan penggunaan
                        sawah seluas 160,82 Ha dengan komoditas utama tanaman padi.</p>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <h3 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-10">Cari Kami</h3>
                    <p class="font-med text-base text-secondary mb-6 lg:text-lg">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Repudiandae amet excepturi deleniti dignissimos incidunt porro pariatur
                        tempora eligendi!</p>
                    <div class="flex items-center">
                        <!-- Youtube -->
                        <a href="https://www.youtube.com/channel/UCfv5tLWdF-H8EYyvGuWCWAg" target="_blank"
                            class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                                xmlns="http://www.  w3.org/2000/svg">
                                <title>YouTube</title>
                                <path
                                    d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                            </svg>
                        </a>
                        <!-- Instagram -->
                        <a href="https://www.instagram.com/maliskandar_19/?hl=id" target="_blank"
                            class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <title>Instagram</title>
                                <path
                                    d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                            </svg>
                        </a>
                        <!-- Tiktok -->
                        <a href="https://www.tiktok.com/@maliskandar_" target="_blank"
                            class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                            <svg role="img" width="20" height="20" class="fill-current"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <title>TikTok</title>
                                <path
                                    d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" />
                            </svg>
                        </a>
                        <!-- Github -->
                        <a href="https://github.com/Maliskandar" target="_blank"
                            class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                            <svg role="img" width="20" height="20" class="fill-current"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <title>GitHub</title>
                                <path
                                    d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Portfolio Section Start -->
    <section id="portfolio" class="pt-36 pb-16 bg-slate-100">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">About</h4>
                    <h2 class="font-semibold text-3xl mb-4 sm:text-4xl lg:text-5xl">Tentang Muncang</h2>
                    <p class="font-semibold text-md text-secondary md:text-lg">Sebagian besar masyarakat bekerja
                        sebagai petani dan peternak di desa ini, namun masyarakat desa Muncang juga bekerja di
                        konveksi-konveksi yang ada.</p>
                </div>
            </div>

            <div class="w-full px-4 flex flex-wrap justify-center">
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="/img/Peternakan desa Muncang.png" alt="Portfolio 1" width="w-full">
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Peternakan Desa Muncang</h3>
                    <p class="font-medium text-base text-secondary">Berikut merupakan peternakan sapi milik warga, ini
                        merupakan salah satu mata pencaharian warga desa muncang.</p>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="/img/SDN_03_Muncang_Bodeh.jpg" alt="Portfolio 1" width="w-full">
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3">SDN 03 Desa Muncang</h3>
                    <p class="font-medium text-base text-secondary">Berikut merupakan Sekolah Dasar Negeri 03 Desa
                        Muncang Kecamatan Bodeh, Kabupaten Pemalang.</p>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="/dist/img/P 1.png" alt="Portfolio 1" width="w-full">
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Wallet Go UI Design </h3>
                    <p class="font-medium text-base text-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit. Accusamus adipisci voluptatibus et.</p>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="/dist/img/Website WalletGo.png" alt="Portfolio 1" width="w-full">
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Wallet Go UI Design </h3>
                    <p class="font-medium text-base text-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit. Accusamus adipisci voluptatibus et.</p>
                </div>
            </div>
    </section>
    <!-- Portfolio Section End -->

    <!-- Client Section Start -->
    <section id="clients" class="pt-36 pb-32 bg-slate-700 py-10 sm:py-16 lg:py-24">
        <div class="container">
            <div class="w-full px-4">
                <div class="mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">Clients</h4>
                    <h2 class="font-semibold text-white text-3xl mb-4 sm:text-4xl lg:text-5xl">Yang Pernah Bekerjasama
                    </h2>
                    <p class="font-semibold text-md text-secondary md:text-lg">desain UI UX Wallet GO (E-wallet) yang
                        memudahkan pengguna dalam melakukan transaksi digital dengan cepat dan mudah, dengan tetap
                        menjaga keamanan dan privasi data.
                    </p>
                </div>
            </div>

            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 justify-center">
                <!-- <div class="max-w-2xl mx-auto text-center">
                    <h2 class="text-3xl font-bold leading-tight text-gray-800 sm:text-4xl lg:text-5xl">Trusted by <span class="text-blue-600">30k+</span> world class companies & design teams</h2>
                </div> -->

                <div
                    class="grid max-w-xl grid-cols-1 mx-auto mt-8 text-center lg:max-w-full sm:mt-12 lg:mt-20 lg:grid-cols-3 gap-x-6 xl:gap-x-12 gap-y-6">
                    <div class="overflow-hidden bg-white rounded-md shadow">
                        <div class="px-8 py-12">
                            <div class="relative w-24 h-24 mx-auto">
                                <img class="relative object-cover w-24 h-24 mx-auto rounded-full"
                                    src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/1/avatar-1.jpg"
                                    alt="" />
                                <div
                                    class="absolute top-0 right-0 flex items-center justify-center bg-primary rounded-full w-7 h-7">
                                    <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M20.309 17.708C22.196 15.66 22.006 13.03 22 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292zm-11.007 0C11.19 15.66 10.999 13.03 10.993 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <blockquote class="mt-7">
                                <p class="text-lg text-black">“Amet minim mollit non deserunt ullam co est sit aliqua
                                    dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation
                                    veniam consequat”</p>
                            </blockquote>
                            <p class="text-base font-semibold tex-tblack mt-9">Jenny Wilson</p>
                            <p class="mt-1 text-base text-gray-600">Project Manager at Microsoft</p>
                        </div>
                    </div>

                    <div class="overflow-hidden bg-white rounded-md shadow">
                        <div class="px-8 py-12">
                            <div class="relative w-24 h-24 mx-auto">
                                <img class="relative object-cover w-24 h-24 mx-auto rounded-full"
                                    src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/1/avatar-2.jpg"
                                    alt="" />
                                <div
                                    class="absolute top-0 right-0 flex items-center justify-center bg-primary rounded-full w-7 h-7">
                                    <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M20.309 17.708C22.196 15.66 22.006 13.03 22 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292zm-11.007 0C11.19 15.66 10.999 13.03 10.993 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <blockquote class="mt-7">
                                <p class="text-lg text-black">“Amet minim mollit non deserunt ullam co est sit aliqua
                                    dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation
                                    veniam consequat”</p>
                            </blockquote>
                            <p class="text-base font-semibold tex-tblack mt-9">Robert Fox</p>
                            <p class="mt-1 text-base text-gray-600">Founder at Brain.co</p>
                        </div>
                    </div>

                    <div class="overflow-hidden bg-white rounded-md shadow">
                        <div class="px-8 py-12">
                            <div class="relative w-24 h-24 mx-auto">
                                <img class="relative object-cover w-24 h-24 mx-auto rounded-full"
                                    src="https://cdn.rareblocks.xyz/collection/celebration/images/testimonials/1/avatar-3.jpg"
                                    alt="" />
                                <div
                                    class="absolute top-0 right-0 flex items-center justify-center bg-primary rounded-full w-7 h-7">
                                    <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M20.309 17.708C22.196 15.66 22.006 13.03 22 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292zm-11.007 0C11.19 15.66 10.999 13.03 10.993 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <blockquote class="mt-7">
                                <p class="text-lg text-black">“Amet minim mollit non deserunt ullam co est sit aliqua
                                    dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation
                                    veniam consequat”</p>
                            </blockquote>
                            <p class="text-base font-semibold tex-tblack mt-9">Kristin Watson</p>
                            <p class="mt-1 text-base text-gray-600">UX Designer at Google</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Section End -->

    <!-- Footer Start -->


    <footer class="bg-white shadow dark:bg-gray-900">
        <div class="container">
            <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <a href="https://flowbite.com/"
                        class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                        <img src="/img/Kabupaten_Pemalang.png" class="h-10" alt="Flowbite Logo" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">SPDM</span>
                    </a>
                    <ul
                        class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                        <li>
                            <a href="#" class="hover:underline me-4 md:me-6">About</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Contact</a>
                        </li>
                    </ul>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">©️ 2023 <a
                        href="https://flowbite.com/" class="hover:underline">Flowbite™️</a>. All Rights
                    Reserved.</span>
            </div>
        </div>
    </footer>


    <!-- Footer End -->

</body>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

</html>
@endsection