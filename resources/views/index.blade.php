@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .background-section {
            background-image: url('');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body>
    <section class="background-section h-screen flex flex-col items-center justify-center">
        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-white-900 md:text-5xl lg:text-6xl dark:text-white">Selamat Datang</h1>
        <p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-white-400">Website Desa Muncang</p>
    </section>
</body>
</html>


@endsection
