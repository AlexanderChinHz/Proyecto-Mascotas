<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="icon" href="storage/img/ico.png" type="image/png">
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <div class="mb-4">
      <label class="block text-gray-700 font-bold mb-2" for="name">
        Nombre:
      </label>
      <p class="text-gray-700"></p>
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 font-bold mb-2" for="email">
        Correo Electrónico:
      </label>
      <p class="text-gray-700"></p>
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 font-bold mb-2" for="message">
        Mensaje:
      </label>
      <p class="text-gray-700"></p>
    </div>
  </div>

  
<footer class="pt-10 pb-4 ">

    {{-- linea y logo --}}
    <div class="w-full h-28 relative flex flex-col ">
        <div class="w-full h-1/2 "></div>
        <div class="w-full h-1/2 border-t-2 border-solid border-green-300"></div>

        <div class="w-auto h-full  absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 ">
            <figure class="w-full h-full transform transition duration-300 ease-in-out hover:-translate-y-2" >
                <img class="w-full h-full b-f "  src="{{ asset('storage/img/logo.png') }}" alt="">
            </figure>
        </div>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

</html>