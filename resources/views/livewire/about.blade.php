<x-layouts.public>
    <x-slot:title>
        {{ __('site.about.title') }}
    </x-slot:title>

    <x-module-header title="{{ __('site.about.header') }}" />

    <section class="py-16 md:py-24 bg-[#f1ece6]/80">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="space-y-6">
                <p class="paragraph">
                    {{ __('site.about.intro_paragraph1') }} <span class="italic">{{ __('site.about.intro_paragraph2') }}</span> {{ __('site.about.intro_paragraph3') }}
                </p>
            </div>
        </div>
    </section>

    <section class="flex items-center justify-center">
        <a href="{{ asset('docs/FichatecnicaTheDuke.pdf') }}" target="_blank" class="btn-3C4220 mt-8">
            {{ __('site.about.ficha_btn') }}
        </a>
    </section>

    <section id="historia" class="py-16 md:py-24 bg-white">
        @php
            $history_title = __('site.about.history_title');
            $history_initial = __('site.about.history_initial');
            $historyRest = mb_substr($history_title, mb_strlen($history_initial));
        @endphp
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl font-bold mb-12 text-[var(--royal-espresso)] leading-none text-center">
                <span class="text-6xl mr-1 FortalezaPlain">{{ $history_initial }}</span>{{ $historyRest }}
            </h2>

            <div class="space-y-12 text-gray-700 relative hidden md:block">

                <div class="hidden md:block absolute left-1/2 w-0.5 bg-gray-200 h-full transform -translate-x-1/2">
                </div>

                @php
                    $historyItems = __('site.about.history');
                @endphp

                @foreach ($historyItems as $index => $item)
                    @php
                        $isLeft = $index % 2 == 0;
                    @endphp

                    <div class="flex w-full relative">
                        <div
                            class="w-full md:w-1/2 md:px-6 {{ $isLeft ? 'md:mr-auto' : 'md:ml-auto' }} flex {{ $isLeft ? 'md:justify-end' : '' }}">
                            <div class="w-full max-w-lg">
                                <div
                                    class="hidden md:block absolute top-1/2 w-3 h-3 bg-[#B89871] rounded-full z-10 transform -translate-y-1/2 
                                    {{ $isLeft ? 'right-1/2 mr-[5px]' : 'left-1/2 ml-[5px]' }}">
                                </div>

                                <div class="absolute left-0 top-0 bottom-0 w-0.5 bg-gray-200 md:hidden"></div>
                                <div
                                    class="absolute left-0 top-3 w-3 h-3 bg-[#B89871] rounded-full z-10 -ml-1.5 md:hidden">
                                </div>

                                <div
                                    class="p-6 border-l-4 md:border-l-0 bg-gray-50 rounded-lg shadow-sm ml-4 md:ml-0 border-[#B89871] {{ $isLeft ? 'md:text-right' : 'md:text-left' }}">
                                    <h4 class="text-xl font-semibold text-gray-900 mb-2">{{ $item['title'] }}</h4>
                                    <p>{{ $item['text'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="md:hidden w-full">
                <div wire:ignore data-flickity='{ "wrapAround": false, "autoPlay": 3000 }'>
                    @foreach ($historyItems as $index => $item)
                        <div class="carousel-cell-image w-80">
                            <div class="p-6 bg-[#f1ece6]/50 rounded-lg shadow-sm ml-4 mr-4 md:ml-0 md:mr-0 min-h-80">
                                <h4 class="text-xl font-semibold mb-2">{{ $item['title'] }}</h4>
                                <p>{{ $item['text'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </section>

    <section id="beneficios" class="py-16 md:py-24 bg-[#f1ece6]/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

                <div class="order-2 md:order-1 lg:pr-8">

                    <h2 class="text-3xl font-bold mb-8 text-[var(--royal-espresso)] leading-none">
                        {{ __('site.about.declaration_title') }}
                    </h2>

                    <div class="space-y-4 text-gray-700">
                        <p class="font-serif italic text-xl text-gray-800 border-l-2 border-[#3C4220] pl-3">
                            {{ __('site.about.declaration_quote') }}
                        </p>
                        <p class="paragraph">
                            {{ __('site.about.declaration_p1') }}
                        </p>
                        <p class="paragraph">
                            {{ __('site.about.declaration_p2') }}
                        </p>
                        <p class="paragraph">
                            {{ __('site.about.declaration_p3') }}
                        </p>
                        <p class="paragraph">
                            {{ __('site.about.declaration_p4') }}
                        </p>
                    </div>

                </div>

                <div
                    class="order-1 md:order-2 bg-gray-100 rounded-tl-2xl rounded-br-2xl shadow-xl overflow-hidden border border-gray-200">
                    <img loading="lazy" src="{{ asset('images/sobreNosotros/1.avif') }}" alt="Stud Royal."
                        class="w-full h-80 md:h-[500px] object-cover">
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="order-2 md:order-1 bg-gray-100 rounded-br-2xl rounded-tl-2xl shadow-xl overflow-hidden">
                    <img loading="lazy" src="{{ asset('images/sobreNosotros/2.avif') }}"
                        alt="Imagen de silla de montar representando filosofía y valores"
                        class="w-full h-80 md:h-[600px] object-cover">
                </div>

                <div class="order-1 md:order-2 lg:pl-8">
                    @php
                        $aboutFiloTitle = __('site.about.filosofia_title');
                        $aboutFiloInitial = __('site.about.filosofia_initial');
                        $aboutFiloRest = mb_substr($aboutFiloTitle, mb_strlen($aboutFiloInitial));
                    @endphp

                    <h2 class="text-3xl font-bold mb-8 text-[var(--royal-espresso)] leading-none">
                        <span class="text-6xl mr-1 FortalezaPlain">{{ $aboutFiloInitial }}</span>{{ $aboutFiloRest }}
                    </h2>

                    <h4 class="text-xl font-semibold text-[#3C4220] mb-3 pb-1 inline-block">
                        {{ __('site.about.philosophy_heading') }}</h4>
                    <p class="paragraph mb-8">
                        {{ __('site.about.philosophy_paragraph') }}
                    </p>

                    <h4 class="text-xl font-semibold text-[#3C4220] mb-4 pb-1 inline-block">
                        {{ __('site.about.values_heading') }}</h4>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 text-gray-700">
                        <div class="flex items-start">
                            <div>
                                <span class="font-bold block">
                                    <span
                                        class="text-[#B89871] text-xl mr-2 leading-none select-none inline-block align-middle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            viewBox="0 0 16 16" fill="#B89871">
                                            <path d="M8 1L14 8 8 15 2 8z" />
                                        </svg>
                                    </span>
                                    {{ __('site.values.nobility.title') }}:
                                </span>
                                <span class="text-sm">{{ __('site.values.nobility.text') }}</span>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div>
                                <span class="font-bold block">
                                    <span
                                        class="text-[#B89871] text-xl mr-2 leading-none select-none inline-block align-middle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            viewBox="0 0 16 16" fill="#B89871">
                                            <path d="M8 1L14 8 8 15 2 8z" />
                                        </svg>
                                    </span>
                                    {{ __('site.values.precision.title') }}:
                                </span>
                                <span class="text-sm">{{ __('site.values.precision.text') }}</span>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div>
                                <span class="font-bold block">
                                    <span
                                        class="text-[#B89871] text-xl mr-2 leading-none select-none inline-block align-middle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            viewBox="0 0 16 16" fill="#B89871">
                                            <path d="M8 1L14 8 8 15 2 8z" />
                                        </svg>
                                    </span>
                                    {{ __('site.values.tradition.title') }}:
                                </span>
                                <span class="text-sm">{{ __('site.values.tradition.text') }}</span>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div>
                                <span class="font-bold block">
                                    <span
                                        class="text-[#B89871] text-xl mr-2 leading-none select-none inline-block align-middle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            viewBox="0 0 16 16" fill="#B89871">
                                            <path d="M8 1L14 8 8 15 2 8z" />
                                        </svg>
                                    </span>
                                    {{ __('site.values.innovation.title') }}:
                                </span>
                                <span class="text-sm">{{ __('site.values.innovation.text') }}</span>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div>
                                <span class="font-bold block">
                                    <span
                                        class="text-[#B89871] text-xl mr-2 leading-none select-none inline-block align-middle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            viewBox="0 0 16 16" fill="#B89871">
                                            <path d="M8 1L14 8 8 15 2 8z" />
                                        </svg>
                                    </span>
                                    {{ __('site.values.elegance.title') }}:
                                </span>
                                <span class="text-sm">{{ __('site.values.elegance.text') }}</span>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div>
                                <span class="font-bold block">
                                    <span
                                        class="text-[#B89871] text-xl mr-2 leading-none select-none inline-block align-middle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            viewBox="0 0 16 16" fill="#B89871">
                                            <path d="M8 1L14 8 8 15 2 8z" />
                                        </svg>
                                    </span>
                                    {{ __('site.values.vision.title') }}:
                                </span>
                                <span class="text-sm">{{ __('site.values.vision.text') }}</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </section>

    <section id="galeria" class="pt-1 bg-[#f1ece6]/80">
        @php
            $galeria_about = [
                ['id' => 6, 'url' => 'images/galeria/6.avif', 'description' => 'Foto A'],
                ['id' => 7, 'url' => 'images/galeria/7.avif', 'description' => 'Foto B'],
                ['id' => 8, 'url' => 'images/galeria/8.avif', 'description' => 'Foto B'],
                ['id' => 9, 'url' => 'images/galeria/9.avif', 'description' => 'Foto B'],
                ['id' => 10, 'url' => 'images/galeria/10.avif', 'description' => 'Foto B'],
            ];

            // Convertir rutas relativas a URLs completas
            $galeria_about = array_map(function ($item) {
                $item['url'] = asset($item['url']);
                return $item;
            }, $galeria_about);

            $gallery_title = __('site.about.gallery_title');
            $gallery_initial = __('site.about.gallery_initial');
            $galleryRest = mb_substr($gallery_title, mb_strlen($gallery_initial));
        @endphp
        <div class="max-w-7xl mx-auto px-4 pb-4">
            <h2 class="text-3xl font-bold mb-6 text-[var(--royal-espresso)]"></h2>
            <h2 class="text-3xl font-bold mb-6 text-[var(--royal-espresso)] leading-none">
                <span class="text-6xl mr-1 FortalezaPlain">{{ $gallery_initial }}</span>{{ $galleryRest }}
            </h2>
            <p class="paragraph">
                {{ __('site.about.gallery_text') }}
            </p>
        </div>

        @livewire('galeria-slider', ['images' => $galeria_about])
    </section>

    <section id="cta" class="bg-[var(--royal-espresso)] py-20">
        <div class="max-w-6xl mx-auto px-6 md:px-12 text-center">

            <h2 class="title-cta">
                {{ __('site.about.call_to_action.title') }}
            </h2>

            <p class="paragraph-cta">
                {{ __('site.about.call_to_action.lead') }}
                <br>
                <br>
                {{ __('site.about.call_to_action.lead1') }}
            </p>

            <a href="{{ route('contact') }}#formulario" class="btn-cta">
                {{ __('site.about.call_to_action.btn') }}
            </a>

        </div>
    </section>

</x-layouts.public>
