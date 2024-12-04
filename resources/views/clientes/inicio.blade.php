@extends('/plantillas/Pusuarios')




@section('titulo', 'crear')

@section('content')



    <section class="bg-white dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                    ¿Que vas a pedir hoy? </h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Hoy se me
                    antoja un buen pollo, los mejores pollos del gallinero a tu boca.</p>
                <a href="#"
                    class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                    Ver menu
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>

            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <div id="default-carousel" class="relative w-full" data-carousel="slide">


                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('images/polloa.png') }}"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('images/pollob.png') }}"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('images/polloc.png') }}"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                        <!-- Item 4 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('images/pollod.png') }}"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                        <!-- Item 5 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('images/polloe.png') }}"class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                    </div>
            </div>
        </div>
    </section>


    <div class="grid grid-cols-7 grid-rows-7 gap-4 bg-gray-100">
        <div class="col-span-3 row-span-2"><img src="{{ asset('images/img.png') }}" alt=""></div>
        <div class="col-span-3 row-span-2 col-start-4 flex items-center justify-center">
            <h2 class="text-2xl md:text-4xl lg:text-4xl text-orange-500 font-extrabold italic text-center">
                ¡Satisface tu apetito de tigre con nuestros deliciosos pollos!
            </h2>
        </div>

        <div class="col-span-3 row-span-3 row-start-3"><img src="{{ asset('images/tirasdepollo.png') }}" alt="">
        </div>
        <div class="col-span-2 row-span-3 col-start-5 row-start-3">
            <div id="default-carousel" class="relative w-full" data-carousel="slide">


                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('images/polloa.png') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('images/pollob.png') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('images/polloc.png') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('images/pollod.png') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('images/polloe.png') }}"class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
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

            </div>
        </div>

        <div class="col-span-7 row-span-2 row-start-6 bg-gray-100 ">
            <div class="text-center">
                <h2 class="text-2xl md:text-5xl lg:text-6xl text-orange-500 font-extrabold italic mb-4"> Sólo ingredientes
                    frescos y los procesos más óptimos para brindarte la mejor calidad. </h2> <br> <button type="button"
                    class=  " transition ease-in-out delay-150  bg-black hover:-translate-y-1 hover:scale-110duration-30 text-white hover:bg-orange-500 focus:ring-4 focus:outline-none  focus:ring-gray-600 font-medium rounded-lg text-sm px-5 py-2.5 orange:hover:bg-black/80 dark:focus:ring-gray-600">
                    ¿QUÉ VAS A ORDENAR?
            </div>
        </div>
    </div>



@endsection
