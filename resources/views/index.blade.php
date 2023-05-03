@section('title', 'Inicio - Bienvenido')

@extends('layouts.header')

@section('content')

<div id="indicators-carousel " class=" relative w-full" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="  relative h-56 -z-10 overflow-hidden rounded-lg md:h-96">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
            <img src="/storage/img/slider/slider1.jpg"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/storage/img/slider/slider2.jpg"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/storage/img/slider/slider3.jpg"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/storage/img/slider/slider4.jpg"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/storage/img/slider/slider5.jpeg"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
            data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
            data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
            data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
            data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
            data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
    <button type="button"
        class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-prev>
        <span
            class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                </path>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button"
        class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-next>
        <span
            class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

<main class="container mx-auto py-6 max-w-6xl"> 

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
            <h1
                class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                ¡Bienvenidos</h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400">Aquí
                encontrarás todo lo que necesitas para mantener a tu fiel amigo feliz y saludable. Ofrecemos productos
                de alta calidad, ¡estamos aquí para ayudarte a darle a tu mascota el amor y cuidado que se merece!</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                <a href="{{route('paquete')}}"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-green-400 hover:bg-green-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Paquetes
                </a>
                <a href="{{route('contact')}}"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-900 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    Contactar
                </a>
            </div>
        </div>
    </section>


    <div class="mb-9 w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="sm:hidden">
            <label for="tabs" class="sr-only">Selecciona</label>
            <select id="tabs"
                class="bg-gray-50 border-0 border-b border-gray-200 text-gray-900 text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option>Estadisticas</option>
                <option>Servicios</option>
                <option>FAQ</option>
            </select>
        </div>
        <ul class="hidden text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex dark:divide-gray-600 dark:text-gray-400"
            id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
            <li class="w-full">
                <button id="stats-tab" data-tabs-target="#stats" type="button" role="tab"
                    aria-controls="stats" aria-selected="true"
                    class="inline-block w-full p-4 rounded-tl-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Seguridad</button>
            </li>
            <li class="w-full">
                <button id="about-tab" data-tabs-target="#about" type="button" role="tab"
                    aria-controls="about" aria-selected="false"
                    class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Servicios</button>
            </li>
            <li class="w-full">
                <button id="faq-tab" data-tabs-target="#faq" type="button" role="tab" aria-controls="faq"
                    aria-selected="false"
                    class="inline-block w-full p-4 rounded-tr-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">FAQ</button>
            </li>
        </ul>
        <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">
            <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="stats" role="tabpanel"
                aria-labelledby="stats-tab">
                <dl
                    class="grid max-w-screen-xl grid-cols-2 gap-8 p-4 mx-auto text-gray-900 sm:grid-cols-3 xl:grid-cols-3 dark:text-white sm:p-8">
                    <div class="up flex flex-col items-center justify-center">
                        <div class="bg-green-300 rounded-full p-3 flex flex-col items-center justify-center">
                            <dt class="mb-2 text-3xl font-extrabold">
                                <svg class="w-7 h-7 mr-1 text-gray-600 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                    aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z">
                                    </path>
                                </svg>
                            </dt>
                        </div>
                        <dd class="text-gray-500 dark:text-gray-400">Encuentra un cuidador</dd>
                    </div>
                    <div class="up flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl font-extrabold">
                          <div class="bg-green-300 rounded-full p-3">
                            <svg class="w-7 h-7 text-gray-600 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3"></path>
                            </svg>
                          </div>
                        </dt>
                        <dd class="text-gray-500 dark:text-gray-400">Reserva y paga</dd>
                      </div>
                      
                    <div class="up flex flex-col items-center justify-center">
                        <div class="flex flex-col items-center justify-center">
                            <dt class="mb-2 text-3xl font-extrabold">
                              <div class="bg-green-300 rounded-full p-3">
                                <svg class="w-7 h-7 text-gray-600 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"></path>
                                </svg>
                              </div>
                            </dt>
                            <dd class="text-gray-500 dark:text-gray-400">Reserva y paga</dd>
                          </div>
                          
                        <dd class="text-gray-500 dark:text-gray-400">¡Relax!</dd>
                    </div>
                </dl>
            </div>
            <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="about" role="tabpanel"
                aria-labelledby="about-tab">
                <h2 class="mb-5 text-2xl font-extrabold tracking-tight text-gray-900 dark:text-white">Nuestros servicios para tu mascota</h2>
                <!-- List -->
                <ul role="list" class="space-y-4 text-gray-500 dark:text-gray-400">
                    <li class="flex space-x-2">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="leading-tight">Nuestros servicios para tu mascota</span>
                    </li>
                    <li class="flex space-x-2">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="leading-tight">Peluquería canina</span>
                    </li>
                    <li class="flex space-x-2">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="leading-tight">Paseos y ejercicio</span>
                    </li>
                    <li class="flex space-x-2 ">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="leading-tight">Entrenamiento y obediencia</span>
                    </li>
                </ul>
            </div>
            <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="faq" role="tabpanel"
                aria-labelledby="faq-tab">
                <div id="accordion-flush" data-accordion="collapse"
                    data-active-classes="bg-white dark:bg-gray-800 text-gray-900 dark:text-white"
                    data-inactive-classes="text-gray-500 dark:text-gray-400">
                    <h2 id="accordion-flush-heading-1">
                        <button type="button"
                            class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                            data-accordion-target="#accordion-flush-body-1" aria-expanded="false"
                            aria-controls="accordion-flush-body-1">
                            <span>¿Cómo puedo enseñar a mi mascota nuevos trucos?</span>
                            <svg data-accordion-icon class="w-6 h-6 rotate-0 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Nuestra empresa ofrece servicios de cuidado de mascotas. Nos encargamos de alimentarlos, darles agua, pasearlos y brindarles atención mientras sus dueños están ocupados o fuera de la ciudad.</p>
                        </div>
                    </div>
                    <h2 id="accordion-flush-heading-2">
                        <button type="button"
                            class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                            data-accordion-target="#accordion-flush-body-2" aria-expanded="false"
                            aria-controls="accordion-flush-body-2">
                            <span>¿Cómo puedo reservar sus servicios de cuidado de mascotas?</span>
                            <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Puede reservar nuestros servicios de cuidado de mascotas a través de nuestro sitio web o poniéndose en contacto con nosotros por teléfono o correo electrónico. Le pediremos información sobre su mascota, su ubicación y los servicios que necesita para que podamos programar una visita.</p>
                        </div>
                    </div>
                    <h2 id="accordion-flush-heading-3">
                        <button type="button"
                            class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                            data-accordion-target="#accordion-flush-body-3" aria-expanded="false"
                            aria-controls="accordion-flush-body-3">
                            <span>¿Qué tan seguras están mis mascotas mientras están bajo el cuidado de su empresa?</span>
                            <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">La seguridad de sus mascotas es nuestra prioridad. Nuestros cuidadores están capacitados para manejar todo tipo de situaciones y están equipados con herramientas de seguridad. Además, llevamos un registro detallado de las necesidades y preferencias de su mascota para asegurarnos de que reciban la atención adecuada. Si surge alguna emergencia, nos pondremos en contacto con usted inmediatamente para discutir el plan de acción.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!--Section: Maps-->
     <section class="negro py-1">
        <div class="mb-6 px-5 py-1 md:max-w-7xl mx-auto">
            <h3 class="text-3xl font-bold text-center mb-10">Encuéntranos aquí</h3>
            <div class="md:flex md:flex-wrap">
              <div class="xl:w-6/12 md:w-7/12 mb-6 lg:mb-0 md:pr-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1971.0470799815514!2d-79.80110264596651!3d8.870826221046684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fac97618db4754f%3A0x6254ebe7dc58da65!2s49%20a%20Nte.%20197-4%2C%20Panam%C3%A1%20Oeste!5e0!3m2!1ses-419!2spa!4v1682967045001!5m2!1ses-419!2spa" class="h-80 w-full border-0 rounded-lg shadow-lg" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <div class="xl:w-6/12 md:w-5/12 md:pl-3 md:flex md:items-center">
                <div class="grid xl:grid-cols-2 xl:grid-rows-2 xl:gap-x-4 md:gap-x-6 justify-center md:justify-start">
                  <div class="mb-10 md:mb-12">
                    <div class="flex items-start">
                      <div class="shrink-0">
                        <div class="p-4 backGreen rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                            <i class="fab fa-instagram text-red-500"></i>

                        </div>
                      </div>
                      <div class="grow ml-6">
                        <p class="font-bold mb-1">Instagram</p>
                        <p class="text-gray-500">@mascotas</p>
                        <p class="text-gray-500">Síguenos</p>
                      </div>
                    </div>
                  </div>
                  <div class="mb-10 md:mb-12">
                    <div class="flex items-start">
                      <div class="shrink-0">
                        <div class="p-4 backGreen rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                            <i class="fab fa-whatsapp text-green-500"></i>

                        </div>
                      </div>
                      <div class="grow ml-6">
                        <p class="font-bold mb-1">WhatsApp</p>
                        <p class="text-gray-500">+507 65495812</p>
                        <p class="text-gray-500">Escríbenos</p>
                      </div>
                    </div>
                  </div>
                  <div class="mb-10 md:mb-12">
                    <div class="flex align-start">
                      <div class="shrink-0">
                        <div class="p-4 backGreen rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                            <i class="far fa-envelope"></i>

                        </div>
                      </div>
                      <div class="grow ml-6">
                        <p class="font-bold mb-1 text-white">Correo</p>
                        <p class="text-gray-500">mascotas@saludables.com</p>
                        <p class="text-gray-500">Escríbenos</p>
                      </div>
                    </div>
                  </div>
                  <div class="mb-10 md:mb-12">
                    <div class="flex align-start">
                      <div class="shrink-0">
                        <div class="p-4 backGreen rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                            <i class="fab fa-youtube text-red-500"></i>


                        </div>
                      </div>
                      <div class="grow ml-6">
                        <p class="font-bold mb-1 text-white">Youtube</p>
                        <p class="text-gray-500">@mascotasaludables</p>
                        <p class="text-gray-500">Síguenos</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
  
      
  
    </section>
    <!--Section: Design Block-->

    <section class="">
        <h1 class="text-4xl text-center font-semibold my-8">Galeria</h1>
<div class="grid grid-cols-2 md:grid-cols-4 gap-4">
    <div class="grid gap-4">
        <div>
            <img class="up h-auto max-w-full rounded-lg" src="storage/img/galery/galery1.webp" alt="">
        </div>
        <div>
            <img class="up h-auto max-w-full rounded-lg" src="storage/img/galery/galery2.webp" alt="">
        </div>
        <div>
            <img class="up h-auto max-w-full rounded-lg" src="storage/img/galery/galery3.webp" alt="">
        </div>
    </div>
    <div class="grid gap-4">
        <div>
            <img class=" up h-auto max-w-full rounded-lg" src="storage/img/galery/galery4.webp" alt="">
        </div>
        <div>
            <img class="up h-auto max-w-full rounded-lg" src="storage/img/galery/galery5.webp" alt="">
        </div>
        <div>
            <img class="up h-auto max-w-full rounded-lg" src="storage/img/galery/galery6.webp" alt="">
        </div>
    </div>
    <div class="grid gap-4">
        <div>
            <img class="up h-auto max-w-full rounded-lg" src="storage/img/galery/galery7.webp" alt="">
        </div>
        <div>
            <img class="up h-auto max-w-full rounded-lg" src="storage/img/galery/galery8.webp" alt="">
        </div>
        <div>
            <img class="up h-auto max-w-full rounded-lg" src="storage/img/galery/galery9.webp" alt="">
        </div>
    </div>
    <div class="grid gap-4 ">
        <div>
            <img class="up h-auto max-w-full rounded-lg" src="storage/img/galery/galery10.webp" alt="">
        </div>
        <div>
            <img class="up h-auto max-w-full rounded-lg" src="storage/img/galery/galery11.webp" alt="">
        </div>
        <div>
            <img class="up h-auto max-w-full rounded-lg " src="storage/img/galery/galery12.webp" alt="">
        </div>
    </div>
</div>
</section>


</main>

@include ('layouts.WhatsApp')


@endSection