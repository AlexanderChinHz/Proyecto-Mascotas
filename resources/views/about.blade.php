
@section('title', 'Nosotros')
@section('h1', 'Nosotros')

@extends('layouts.header')

@section('content')
 
@include('layouts.cover')

<main class="container mx-auto py-6 max-w-6xl my-5">

    <div class="bg-white py-10 px-6 sm:px-10 lg:px-16 text-justify">
        <h1 class="text-4xl font-extrabold text-gray-900 mb-6">Bienvenidos a Mascotas</h1>
        <p class="text-lg text-gray-700 leading-8 mb-6">Somos un equipo de apasionados amantes de los animales y nuestro objetivo es proporcionar servicios de alta calidad para garantizar que las mascotas reciban el amor, el cuidado y la atención que necesitan.</p>
        <p class="text-lg text-gray-700 leading-8 mb-6">Nos enorgullece ser un equipo altamente capacitado y dedicado, con años de experiencia en el cuidado de mascotas de diferentes razas y especies. Nos apasiona lo que hacemos y siempre nos esforzamos por ser mejores cada día, para asegurarnos de que tu mascota tenga la mejor experiencia posible.</p>
        <p class="text-lg text-gray-700 leading-8 mb-6">En Mascotas, trabajamos con un enfoque personalizado para brindar atención individualizada a cada mascota. Sabemos que cada animal es único y tiene necesidades diferentes, por lo que adaptamos nuestros servicios a las necesidades específicas de cada mascota. Ya sea que necesites un paseador de perros diario, cuidado en tu hogar o sesiones de fotografía personalizadas, nuestro equipo de profesionales está aquí para ayudarte.</p>
        <p class="text-lg text-gray-700 leading-8 mb-6">Nos tomamos muy en serio el bienestar de tu mascota y siempre trabajamos con los más altos estándares de calidad y seguridad. Nos aseguramos de que todas las mascotas estén en un ambiente seguro y controlado en todo momento y seguimos estrictamente las pautas de salud y seguridad.</p>
        <p class="text-lg text-gray-700 leading-8 mb-6">En Mascotas, creemos que todas las mascotas merecen amor, respeto y cuidado. Por eso, trabajamos arduamente para garantizar que tu mascota se sienta cómoda y feliz en todo momento. Además, estamos comprometidos a trabajar juntos contigo para crear una experiencia positiva para ti y tu mascota.</p>
        <p class="text-lg text-gray-700 leading-8 mb-6">Nos encantaría conocerte y a tu mascota. ¡Contáctanos hoy mismo y descubre cómo podemos ayudarte a cuidar de tu animal de compañía!</p>
        <img class="w-full h-auto rounded-lg shadow-lg my-6" src="storage/img/about/about.png" alt="Imagen de mascotas">
      </div>

</main>
@include ('layouts.WhatsApp')
@endsection