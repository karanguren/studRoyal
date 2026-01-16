<x-layouts.public>
    <x-slot:title>
        {{ __('site.services.title') }}
    </x-slot:title>

    <x-module-header title="{{ __('site.services.header') }}" description="{{ __('site.services.intro_1') }}" />

    <section class="py-16 md:py-24 bg-[#f1ece6]/80">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <div class="space-y-6 text-lg text-gray-700 leading-7">
                    <p class="paragraph">
                        {{ __('site.services.intro_2') }}
                    </p>
                    <p class="paragraph">
                        {{ __('site.services.intro_3') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- VERSION 2 --}}

    <section id="servicios-principales" class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-0 sm:px-6 lg:px-8">
            <div class="hidden sm:grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                {{-- Tarjeta 1: Cría y Selección Genética --}}
                <div
                    class="bg-[#f1ece6]/80 p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border border-gray-100 flex flex-col">
                    <h4 class="text-xl font-semibold text-gray-900 mb-3">{{ __('site.services.breeding_and_genetics') }}
                    </h4>
                    <p class="text-gray-600 text-sm mb-4 flex-grow">
                        {{ __('site.services.breeding_and_genetics_desc') }}
                    </p>
                    <div class="mt-auto">
                        <img loading="lazy" src="{{ asset('images/servicios/1.avif') }}"
                            alt="{{ __('site.services.breeding_and_genetics') }}"
                            class="w-full object-cover rounded-md mt-4 shadow-sm">
                    </div>
                </div>

                {{-- Tarjeta 2: Entrenamiento de Alto Rendimiento --}}
                <div
                    class="bg-[#f1ece6]/80 p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border border-gray-100 flex flex-col">
                    <h4 class="text-xl font-semibold text-gray-900 mb-3">
                        {{ __('site.services.high_performance_training') }}</h4>
                    <p class="text-gray-600 text-sm mb-4 flex-grow">
                        {{ __('site.services.high_performance_training_desc') }}
                    </p>
                    <div class="mt-auto">
                        <img loading="lazy" src="{{ asset('images/servicios/2.avif') }}"
                            alt="{{ __('site.services.high_performance_training') }}"
                            class="w-full object-cover rounded-md mt-4 shadow-sm">
                    </div>
                </div>

                {{-- Tarjeta 3: Manejo, Cuidado y Bienestar Integral --}}
                <div
                    class="bg-[#f1ece6]/80 p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border border-gray-100 flex flex-col">
                    <h4 class="text-xl font-semibold text-gray-900 mb-3">{{ __('site.services.comprehensive_care') }}
                    </h4>
                    <p class="text-gray-600 text-sm mb-4 flex-grow">
                        {{ __('site.services.comprehensive_care_desc') }}
                    </p>
                    <div class="mt-auto">
                        <img loading="lazy" src="{{ asset('images/servicios/3.avif') }}"
                            alt="{{ __('site.services.comprehensive_care') }}"
                            class="w-full object-cover rounded-md mt-4 shadow-sm">
                    </div>
                </div>

                {{-- Tarjeta 4: Veterinaria Especializada --}}
                <div
                    class="bg-[#f1ece6]/80 p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border border-gray-100 flex flex-col">
                    <h4 class="text-xl font-semibold text-gray-900 mb-3">{{ __('site.services.specialized_veterinary') }}</h4>
                    <p class="text-gray-600 text-sm mb-4 flex-grow">
                        {{ __('site.services.veterinary_desc') }}
                    </p>
                    <div class="mt-auto">
                        <img loading="lazy" src="{{ asset('images/servicios/4.avif') }}"
                            alt="Imagen de Veterinaria Especializada"
                            class="w-full object-cover rounded-md mt-4 shadow-sm">
                    </div>
                </div>

                {{-- Tarjeta 5: Gestión Estratégica del Potencial del Caballo --}}
                <div
                    class="bg-[#f1ece6]/80 p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border border-gray-100 flex flex-col">
                    <h4 class="text-xl font-semibold text-gray-900 mb-3">{{ __('site.services.strategic_management') }}</h4>
                    <p class="text-gray-600 text-sm mb-4 flex-grow">
                        {{ __('site.services.strategic_management_desc') }}
                    </p>
                    <div class="mt-auto">
                        <img loading="lazy" src="{{ asset('images/servicios/5.avif') }}"
                            alt="Imagen de Gestión Estratégica del Potencial del Caballo"
                            class="w-full object-cover rounded-md mt-4 shadow-sm">
                    </div>
                </div>

                {{-- Tarjeta 6: Preparación y Presentación en Competencias --}}
                <div
                    class="bg-[#f1ece6]/80 p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border border-gray-100 flex flex-col">
                    <h4 class="text-xl font-semibold text-gray-900 mb-3">{{ __('site.services.competition_preparation') }}</h4>
                    <p class="text-gray-600 text-sm mb-4 flex-grow">
                        {{ __('site.services.competition_preparation_desc') }}
                    </p>
                    <div class="mt-auto">
                        <img loading="lazy" src="{{ asset('images/servicios/6.avif') }}"
                            alt="Imagen de Preparación y Presentación en Competencias"
                            class="w-full object-cover rounded-md mt-4 shadow-sm">
                    </div>
                </div>

            </div>


            <div class="sm:hidden">
                <div wire:ignore data-flickity='{ "wrapAround": false, "autoPlay": 3000 }' class="">
                    <div class="carousel-cel">
                        <div
                            class="bg-[#f1ece6]/80 p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border border-gray-100 flex flex-col h-9/10">
                            <h4 class="text-xl font-semibold text-gray-900 mb-3">{{ __('site.services.breeding_and_genetics') }}</h4>
                            <p class="text-gray-600 text-sm mb-4 flex-grow">
                                {{ __('site.services.breeding_and_genetics_desc') }}
                            </p>
                            <div class="mt-auto">
                                <img loading="lazy" src="{{ asset('images/servicios/1.avif') }}"
                                    alt="Imagen de Cría y Selección Genética"
                                    class="w-full object-cover rounded-md mt-4 shadow-sm">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cel">
                        <div
                            class="bg-[#f1ece6]/80 p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border border-gray-100 flex flex-col h-9/10">
                            <h4 class="text-xl font-semibold text-gray-900 mb-3">{{ __('site.services.high_performance_training') }}</h4>
                            <p class="text-gray-600 text-sm mb-4 flex-grow">
                                {{ __('site.services.high_performance_training_desc') }}
                            </p>
                            <div class="mt-auto">
                                <img loading="lazy" src="{{ asset('images/servicios/2.avif') }}"
                                    alt="Imagen de Entrenamiento de Alto Rendimiento"
                                    class="w-full object-cover rounded-md mt-4 shadow-sm">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cel">
                        <div
                            class="bg-[#f1ece6]/80 p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border border-gray-100 flex flex-col h-9/10">
                            <h4 class="text-xl font-semibold text-gray-900 mb-3">{{ __('site.services.comprehensive_care') }}</h4>
                            <p class="text-gray-600 text-sm mb-4 flex-grow">
                                {{ __('site.services.comprehensive_care_desc') }}
                            </p>
                            <div class="mt-auto">
                                <img loading="lazy" src="{{ asset('images/servicios/3.avif') }}"
                                    alt="Imagen de Manejo, Cuidado y Bienestar Integral"
                                    class="w-full object-cover rounded-md mt-4 shadow-sm">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cel">
                        <div
                            class="bg-[#f1ece6]/80 p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border border-gray-100 flex flex-col h-9/10">
                            <h4 class="text-xl font-semibold text-gray-900 mb-3">{{ __('site.services.specialized_veterinary') }}</h4>
                            <p class="text-gray-600 text-sm mb-4 flex-grow">
                                {{ __('site.services.veterinary_desc') }}
                            </p>
                            <div class="mt-auto">
                                <img loading="lazy" src="{{ asset('images/servicios/4.avif') }}"
                                    alt="Imagen de Veterinaria Especializada"
                                    class="w-full object-cover rounded-md mt-4 shadow-sm">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cel">
                        <div
                            class="bg-[#f1ece6]/80 p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border border-gray-100 flex flex-col h-9/10">
                            <h4 class="text-xl font-semibold text-gray-900 mb-3">{{ __('site.services.strategic_management') }}</h4>
                            <p class="text-gray-600 text-sm mb-4 flex-grow">
                                {{ __('site.services.strategic_management_desc') }}
                            </p>
                            <div class="mt-auto">
                                <img loading="lazy" src="{{ asset('images/servicios/5.avif') }}"
                                    alt="Imagen de Gestión Estratégica del Potencial del Caballo"
                                    class="w-full object-cover rounded-md mt-4 shadow-sm">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cel">
                        <div
                            class="bg-[#f1ece6]/80 p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border border-gray-100 flex flex-col h-9/10">
                            <h4 class="text-xl font-semibold text-gray-900 mb-3">{{ __('site.services.competition_preparation') }}</h4>
                            <p class="text-gray-600 text-sm mb-4 flex-grow">
                                {{ __('site.services.competition_preparation_desc') }}
                            </p>
                            <div class="mt-auto">
                                <img loading="lazy" src="{{ asset('images/servicios/6.avif') }}"
                                    alt="Imagen de Preparación y Presentación en Competencias"
                                    class="w-full object-cover rounded-md mt-4 shadow-sm">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="servicios-complementarios" class="py-16 md:py-24 bg-[#f1ece6]/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- TÍTULO PRINCIPAL DE LA SECCIÓN --}}
            {{-- <div class="text-center mb-16">
                <p class="text-4xl md:text-5xl font-extrabold text-[#3C4220] leading-tight">Servicios Complementarios
                </p>
            </div> --}}

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                {{-- Tarjeta 1: Equipamiento, Uniformes y Estética Institucional --}}
                <div
                    class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300 border border-gray-200 flex flex-col">

                    <h4 class="text-xl font-semibold text-[#3C4220] mb-3">{{ __('site.services.equipment_and_accessories') }}</h4>
                    <p class="text-gray-600 text-sm mb-4 flex-grow">
                        {{ __('site.services.equipment_and_accessories_desc') }}
                    </p>
                    <div class="mt-auto">
                        <img loading="lazy" src="{{ asset('images/galeria/4.avif') }}"
                            alt="Equipamiento y uniformes ecuestres"
                            class="w-full object-cover object-left rounded-md mt-4 shadow-sm">
                    </div>
                </div>

                {{-- Tarjeta 2: Asesoría en Adquisición y Evaluación de Ejemplares --}}
                <div
                    class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300 border border-gray-200 flex flex-col">

                    <h4 class="text-xl font-semibold text-[#3C4220] mb-3">{{ __('site.services.consulting') }}</h4>
                    <p class="text-gray-600 text-sm mb-4 flex-grow">
                        {{ __('site.services.consulting_desc') }}
                    </p>
                    <div class="mt-auto">
                        <img loading="lazy" src="{{ asset('images/galeria/1.avif') }}"
                            alt="Asesoría en adquisición de caballos"
                            class="w-full object-cover rounded-md mt-4 shadow-sm">
                    </div>
                </div>

                {{-- Tarjeta 3: Gestión Documental y Administrativa Ecuestre --}}
                <div
                    class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300 border border-gray-200 flex flex-col">

                    <h4 class="text-xl font-semibold text-[#3C4220] mb-3">{{ __('site.services.equestrian_management') }}</h4>
                    <p class="text-gray-600 text-sm mb-4 flex-grow">{{ __('site.services.equestrian_management_desc') }}</p>
                    <div class="mt-auto">
                        <img loading="lazy" src="{{ asset('images/servicios/7.avif') }}"
                            alt="Documentación administrativa ecuestre"
                            class="w-full object-cover rounded-md mt-4 shadow-sm">
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section id="cta" class="bg-[var(--royal-espresso)] py-20">
        <div class="max-w-6xl mx-auto px-6 md:px-12 text-center">

            <h2 class="title-cta">{{ __('site.services.cta_title') }}</h2>

            <p class="paragraph-cta">
                {{ __('site.services.cta_lead') }}
            </p>

            <a href="{{ route('contact') }}#formulario" class="btn-cta">
                {{ __('site.services.cta_btn') }}
            </a>

        </div>
    </section>

</x-layouts.public>
