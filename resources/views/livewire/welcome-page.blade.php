<div>
    <header class="w-full h-screen relative overflow-hidden">
        <div class="carousel" data-flickity='{ "wrapAround": true, "autoPlay": 2000 }'>
            <div class="carousel-cell bg-[url(../../public/images/home/1.avif)] bg-cover bg-center w-full h-screen">
                <div class="flex flex-col justify-end lg:justify-center px-8 lg:px-24 h-full lg:pb-0">

                    <h2 class="text-5xl mb-6 text-[var(--royal-ash)]">{{ __('site.welcome.title') }}</h2>

                    <p class="lg:w-1/2 text-white text-xl mb-12 lg:mb-0">{{ __('site.welcome.lead') }}</p>
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
            @php
                $quienesTitle = __('site.welcome.quienes_title');
                $quienesInitial = __('site.welcome.quienes_initial');
                $quienesRest = mb_substr($quienesTitle, mb_strlen($quienesInitial));
            @endphp

            <h2 class="text-3xl font-bold mb-6 text-[var(--royal-espresso)] leading-none">
                <span class="text-6xl mr-1 FortalezaPlain">{{ $quienesInitial }}</span>{{ $quienesRest }}
            </h2>
            <h2 class="text-xl font-bold mb-6 ">{{ __('site.welcome.quienes_sub') }}</h2>
            <p class="paragraph">
                {{ __('site.welcome.quienes_paragraph') }}
            </p>
            <div class="flex justify-center  lg:justify-start">
                <a href="{{ route('about') }}" class="lg:w-1/3 w-1/2 btn-3C4220 mt-8 mb-4">
                    {{ __('site.welcome.ver_mas') }}
                </a>
            </div>
        </div>

        <div class="grid grid-cols-2 grid-rows-2 gap-4 items-end">
            <img loading="lazy" src="{{ asset('images/home/5.avif') }}"
                class="rounded-tl-2xl rounded-br-2xl shadow-lg row-span-2 w-full h-full object-cover object-right mb-8" />

            <img loading="lazy" src="{{ asset('images/home/6.avif') }}"
                class="rounded-tr-2xl rounded-bl-2xl shadow-lg w-full h-full object-cover " />

            <img loading="lazy" src="{{ asset('images/home/4.avif') }}"
                class="rounded-tl-2xl rounded-br-2xl shadow-lg w-full h-full object-cover" />
        </div>
    </section>

    <section id="filosofia" class="py-16 md:py-24 bg-[#f1ece6]/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-start">

                <div
                    class="order-1 relative shadow-xl overflow-hidden border border-gray-200 h-full rounded-tl-2xl rounded-br-2xl">
                    <img loading="lazy" src="{{ asset('images/home/7.avif') }}" alt="Stud Royal"
                        class="w-full h-90 md:h-[600px] object-cover rounded-tl-2xl rounded-br-2xl object-top">

                    <div class="absolute inset-0 bg-[#3C4220]/10 mix-blend-multiply"></div>
                </div>

                <div class="order-2 lg:pl-8">

                    @php
                        $filoTitle = __('site.welcome.filosofia_title');
                        $filoInitial = __('site.welcome.filosofia_initial');
                        $filoRest = mb_substr($filoTitle, mb_strlen($filoInitial));
                    @endphp

                    <h2 class="text-3xl font-bold mb-6 text-[var(--royal-espresso)] leading-none">
                        <span class="text-6xl mr-1 FortalezaPlain">{{ $filoInitial }}</span>{{ $filoRest }}
                    </h2>

                    <p class="text-lg italic text-gray-700 mb-8 border-l-4 border-[#B89871] pl-4">
                        {{ __('site.welcome.filosofia_lead') }}
                    </p>

                    <div class="space-y-6">

                        <div
                            class="flex items-start p-5 bg-white rounded-tr-2xl rounded-bl-2xl shadow-md hover:shadow-lg transition duration-300 border border-gray-100">
                            <div>
                                <h4 class="font-bold text-lg text-[var(--royal-espresso)] mb-1">
                                    {{ __('site.values.tradition.title') }}</h4>
                                <p class="text-gray-600">{{ __('site.values.tradition.text') }}</p>
                            </div>
                        </div>

                        <div
                            class="flex items-start p-5 bg-white rounded-tl-2xl rounded-br-2xl shadow-md hover:shadow-lg transition duration-300 border border-gray-100">
                            <div>
                                <h4 class="font-bold text-lg text-[var(--royal-espresso)] mb-1">
                                    {{ __('site.values.science.title') }}</h4>
                                <p class="text-gray-600">{{ __('site.values.science.text') }}</p>
                            </div>
                        </div>

                        <div
                            class="flex items-start p-5 bg-white rounded-tr-2xl rounded-bl-2xl shadow-md hover:shadow-lg transition duration-300 border border-gray-100">
                            <div>
                                <h4 class="font-bold text-lg text-[var(--royal-espresso)] mb-1">
                                    {{ __('site.values.elegance.title') }}</h4>
                                <p class="text-gray-600">{{ __('site.values.elegance.text') }}</p>
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

                    @php
                        $servicesTitle = __('site.welcome.services_header');
                        $servicesInitial = __('site.welcome.services_initial');
                        $servicesRest = mb_substr($servicesTitle, mb_strlen($servicesInitial));
                    @endphp

                    <h2 class="text-3xl font-bold mb-6 text-[var(--royal-espresso)] leading-none">
                        <span class="text-6xl mr-1 FortalezaPlain">{{ $servicesInitial }}</span>{{ $servicesRest }}
                    </h2>

                    <p class="paragraph">
                        {{ __('site.welcome.services_text') }}
                    </p>
                    <div class="flex justify-center lg:justify-start">
                        <a href="{{ route('services') }}" class="btn-3C4220 mt-8">
                            {{ __('site.welcome.services_btn') }}
                        </a>
                    </div>

                </div>

                <div
                    class="order-1 md:order-2 bg-gray-100 rounded-tl-2xl rounded-br-2xl shadow-xl overflow-hidden border border-gray-200">
                    <img loading="lazy" src="{{ asset('images/home/8.avif') }}" alt="Stud Royal."
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

            $galeria_home = array_map(function ($item) {
                $item['url'] = asset($item['url']);
                return $item;
            }, $galeria_home);
            $galeriaTitle = __('site.welcome.galeria_title');
            $galeriaInitial = __('site.welcome.galeria_initial');
            $galeriaRest = mb_substr($galeriaTitle, mb_strlen($galeriaInitial));
        @endphp

        <div class="max-w-7xl mx-auto px-4 pb-4">
            <h2 class="text-3xl font-bold mb-6 text-[var(--royal-espresso)] leading-none">
                <span class="text-6xl mr-1 FortalezaPlain">{{ $galeriaInitial }}</span>{{ $galeriaRest }}
            </h2>
            <p class="paragraph">
                {{ __('site.welcome.galeria_text1') }} <span class="italic">{{ __('site.welcome.galeria_text2') }}</span> {{ __('site.welcome.galeria_text3') }}
            </p>
        </div>

        @livewire('galeria-slider', ['images' => $galeria_home])
    </section>

    <section id="cta" class="bg-[var(--royal-espresso)] py-20">
        <div class="max-w-6xl mx-auto px-6 md:px-12 text-center">
            <h2 class="title-cta">{{ __('site.welcome.cta_title') }}</h2>
            <p class="paragraph-cta">{{ __('site.welcome.cta_lead') }}</p>
            <a href="{{ route('contact') }}#formulario" class="btn-cta">{{ __('site.welcome.cta_btn') }}</a>
        </div>
    </section>
</div>
