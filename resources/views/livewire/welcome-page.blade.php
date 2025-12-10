<div>
    <header class="w-full h-screen relative overflow-hidden">
        <div class="carousel" data-flickity='{ "wrapAround": true, "autoPlay": 2000 }'>
            <div class="carousel-cell bg-[url(../../public/images/home/1.avif)] bg-cover bg-center w-full h-screen">
                <div class="flex flex-col justify-end lg:justify-center px-8 lg:px-24 h-full lg:pb-0">

                    <h2 class="text-5xl mb-6 text-[var(--royal-ash)]">El linaje de la
                        excelencia ecuestre.
                    </h2>

                    <p class="lg:w-1/2 text-white text-xl mb-12 lg:mb-0">Stud Royal es una casa hípica venezolana donde
                        tradición,
                        ciencia y visión se unen para formar ejemplares de alto rendimiento. Desde la genética hasta la
                        pista, elevamos cada etapa del camino ecuestre con precisión, elegancia y propósito.</p>
                </div>
            </div>
            <div class="carousel-cell bg-[url(../../public/images/home/2.avif)] bg-cover bg-center w-full h-screen">
                {{-- <div class="flex flex-col justify-center px-15 lg:px-24 h-full">
                    <h2 class="text-5xl lg:text-8xl mb-6 text-[var(--royal-ash)] FortalezaPlain">El linaje de la
                        excelencia ecuestre.</h2>
                    <p class="lg:w-1/2 text-white text-xl">Stud Royal es una casa hípica venezolana donde tradición,
                        ciencia y visión se unen para formar ejemplares de alto rendimiento. Desde la genética hasta la
                        pista, elevamos cada etapa del camino ecuestre con precisión, elegancia y propósito.</p>
                </div> --}}
            </div>
            <div class="carousel-cell bg-[url(../../public/images/home/3.avif)] bg-cover bg-center w-full h-screen">
            </div>
        </div>
    </header>

    <section id="quienes" class="max-w-7xl mx-auto md:px-12 px-4 py-20 min-h-screen grid md:grid-cols-2 gap-10">
        <div class="flex flex-col justify-center h-full">
            <h2 class="text-3xl font-bold mb-6 text-[var(--royal-espresso)] leading-none">
                <span class="text-6xl mr-1 FortalezaPlain">Q</span>uiénes Somos
            </h2>
            <h2 class="text-xl font-bold mb-6 ">Una nueva generación del hipismo venezolano
            </h2>
            <p class="paragraph">
                Stud Royal nace en el corazón de La Rinconada como un proyecto que honra la herencia del hipismo
                nacional y abraza la innovación del mundo ecuestre moderno. Somos una casa donde la genética, la
                técnica, el diseño y la pasión trabajan en armonía para formar leyendas.
            </p>
            <div class="flex justify-center  lg:justify-start">
                <a href="{{ route('about') }}" class="lg:w-1/3 w-1/2 btn-3C4220 mt-8 mb-4">
                    ver más
                </a>
            </div>
        </div>

        <div class="grid grid-cols-2 grid-rows-2 gap-4 items-end">
            <img src="{{ asset('images/home/5.avif') }}"
                class="rounded-tl-2xl rounded-br-2xl shadow-lg row-span-2 w-full h-full object-cover object-right mb-8" />

            <img src="{{ asset('images/home/6.avif') }}"
                class="rounded-tr-2xl rounded-bl-2xl shadow-lg w-full h-full object-cover " />

            <img src="{{ asset('images/home/4.avif') }}"
                class="rounded-tl-2xl rounded-br-2xl shadow-lg w-full h-full object-cover" />
        </div>
    </section>

    <section id="filosofia" class="py-16 md:py-24 bg-[#f1ece6]/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-start">

                <div
                    class="order-1 relative shadow-xl overflow-hidden border border-gray-200 h-full rounded-tl-2xl rounded-br-2xl">
                    <img src="{{ asset('images/home/7.avif') }}" alt="Stud Royal"
                        class="w-full h-90 md:h-[600px] object-cover rounded-tl-2xl rounded-br-2xl object-top">

                    <div class="absolute inset-0 bg-[#3C4220]/10 mix-blend-multiply"></div>
                </div>

                <div class="order-2 lg:pl-8">

                    <h2 class="text-3xl font-bold mb-6 text-[var(--royal-espresso)] leading-none">
                        <span class="text-6xl mr-1 FortalezaPlain">N</span>uestra Filosofía
                    </h2>

                    <p class="text-lg italic text-gray-700 mb-8 border-l-4 border-[#B89871] pl-4">
                        Creemos que la grandeza no se improvisa: se hereda, se entrena y se perfecciona.
                    </p>

                    <div class="space-y-6">

                        <div
                            class="flex items-start p-5 bg-white rounded-tr-2xl rounded-bl-2xl shadow-md hover:shadow-lg transition duration-300 border border-gray-100">
                            <div>
                                <h4 class="font-bold text-lg text-[var(--royal-espresso)] mb-1">Tradición</h4>
                                <p class="text-gray-600">Honramos la historia y el linaje del hipismo venezolano e
                                    internacional, respetando las raíces de la nobleza ecuestre.</p>
                            </div>
                        </div>

                        <div
                            class="flex items-start p-5 bg-white rounded-tl-2xl rounded-br-2xl shadow-md hover:shadow-lg transition duration-300 border border-gray-100">
                            <div>
                                <h4 class="font-bold text-lg text-[var(--royal-espresso)] mb-1">Ciencia</h4>
                                <p class="text-gray-600">Decisiones basadas en datos, análisis genético y métricas de
                                    rendimiento avanzadas para optimizar el desempeño.</p>
                            </div>
                        </div>

                        <div
                            class="flex items-start p-5 bg-white rounded-tr-2xl rounded-bl-2xl shadow-md hover:shadow-lg transition duration-300 border border-gray-100">
                            <div>
                                <h4 class="font-bold text-lg text-[var(--royal-espresso)] mb-1">Elegancia</h4>
                                <p class="text-gray-600">Una estética institucional impecable que define nuestro
                                    compromiso con la excelencia visual y el estilo en cada detalle.</p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="beneficios" class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

                <div class="order-2 md:order-1 lg:pr-8">

                    <h2 class="text-3xl font-bold mb-6 text-[var(--royal-espresso)] leading-none">
                        <span class="text-6xl mr-1 FortalezaPlain">S</span>ervicios ecuestres de élite
                    </h2>

                    <p class="paragraph">
                        Desarrollamos cada una de las áreas esenciales del mundo ecuestre profesional: cría,
                        entrenamiento, manejo, bienestar, veterinaria, preparación para competencias, adquisición de
                        ejemplares y gestión integral del stud.
                    </p>
                    <div class="flex justify-center lg:justify-start">
                        <a href="{{ route('services') }}" class="btn-3C4220 mt-8">
                            Ver Servicios
                        </a>
                    </div>

                </div>

                <div
                    class="order-1 md:order-2 bg-gray-100 rounded-tl-2xl rounded-br-2xl shadow-xl overflow-hidden border border-gray-200">
                    <img src="{{ asset('images/home/8.avif') }}" alt="Stud Royal."
                        class="w-full h-80 md:h-[500px] object-cover">
                </div>
            </div>
        </div>
    </section>

    <section id="galeria" class="pt-10 bg-[#f1ece6]/80">
        @php
            $galeria_home = [
                ['id' => 1, 'url' => 'images/galeria/1.avif', 'description' => 'Foto A'],
                ['id' => 2, 'url' => 'images/galeria/2.avif', 'description' => 'Foto B'],
                ['id' => 3, 'url' => 'images/galeria/3.avif', 'description' => 'Foto B'],
                ['id' => 4, 'url' => 'images/galeria/4.avif', 'description' => 'Foto B'],
                ['id' => 5, 'url' => 'images/galeria/5.avif', 'description' => 'Foto B'],
            ];
        @endphp
        <div class="max-w-7xl mx-auto px-4 pb-4">
            <h2 class="text-3xl font-bold mb-6 text-[var(--royal-espresso)] leading-none">
                <span class="text-6xl mr-1 FortalezaPlain">U</span>n vistazo a nuestra casa
            </h2>
            <p class="paragraph">
                Cada detalle del Stud <span class="italic">sus espacios, procesos y estética</span> refleja el linaje y
                la visión que nos definen.
            </p>
        </div>

        @livewire('galeria-slider', ['images' => $galeria_home])
    </section>

    <section id="cta" class="bg-[var(--royal-espresso)] py-20">
        <div class="max-w-6xl mx-auto px-6 md:px-12 text-center">

            <h2 class="title-cta">
                Vive la experiencia Royal
            </h2>

            <p class="paragraph-cta">
                Coordinamos visitas guiadas para propietarios y aliados del mundo ecuestre.
                Descubre cómo trabajamos el linaje, la ciencia y la excelencia.
            </p>

            <a href="{{ route('contact') }}#formulario" class="btn-cta">
                Agenda tu visita
            </a>

        </div>
    </section>
</div>
