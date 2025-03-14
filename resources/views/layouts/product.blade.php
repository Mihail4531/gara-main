<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{ $meta ?? '' }}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
    </style>
</head>

<body class= "bg-[url('unsplash.jpg')] bg-cover" x-data="{ openMenu : false }"
:class="openMenu ? 'overflow-hidden' : 'overflow-visible' ">
    @include('components.partials.header')
    {{$slot}}
    @include('components.partials.footer')
</body>

</html>
