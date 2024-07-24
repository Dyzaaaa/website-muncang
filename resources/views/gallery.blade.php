@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .filter-item {
            display: none;
        }
        .filter-item.show {
            display: block;
        }
        /* Styling untuk tombol */
        .filter-btn {
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="flex items-center justify-center py-4 md:py-8 flex-wrap">
    <button type="button" class="filter-btn text-blue-700 hover:text-white border border-blue-600 bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:bg-gray-900 dark:focus:ring-blue-800" data-filter="all">Semua Kegiatan</button>
    <button type="button" class="filter-btn text-blue-700 hover:text-white border border-blue-600 bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:bg-gray-900 dark:focus:ring-blue-800" data-filter="nyadran">Nyadran</button>
    <button type="button" class="filter-btn text-blue-700 hover:text-white border border-blue-600 bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:bg-gray-900 dark:focus:ring-blue-800" data-filter="agustus">17 Agustus</button>
    <button type="button" class="filter-btn text-blue-700 hover:text-white border border-blue-600 bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:bg-gray-900 dark:focus:ring-blue-800" data-filter="pengajian">Pengajian</button>
    <button type="button" class="filter-btn text-blue-700 hover:text-white border border-blue-600 bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:bg-gray-900 dark:focus:ring-blue-800" data-filter="sedekah">Sedekah Bumi</button>
</div>

<div class="grid grid-cols-2 md:grid-cols-3 gap-4">
    <div class="filter-item all nyadran">
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="Nyadran">
    </div>
    <div class="filter-item all agustus">
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="17 Agustus">
    </div>
    <div class="filter-item all pengajian">
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="Pengajian">
    </div>
    <div class="filter-item all sedekah">
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="Sedekah Bumi">
    </div>
    <div class="filter-item all nyadran">
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="Nyadran">
    </div>
    <div class="filter-item all agustus">
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-6.jpg" alt="17 Agustus">
    </div>
    <!-- Tambahkan lebih banyak elemen dengan class yang sesuai -->
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const buttons = document.querySelectorAll(".filter-btn");
        const items = document.querySelectorAll(".filter-item");

        buttons.forEach(button => {
            button.addEventListener("click", function() {
                const filter = this.getAttribute("data-filter");

                items.forEach(item => {
                    item.classList.remove("show");
                    if (item.classList.contains(filter) || filter === "all") {
                        item.classList.add("show");
                    }
                });
            });
        });

        // Initially show all items
        items.forEach(item => {
            item.classList.add("show");
        });
    });
</script>

</body>
</html>

@endsection
