<x-layouts.public>
    <x-slot:title>
        Sobre Nosotros | Stud Royal
    </x-slot:title>

    <x-module-header title="El linaje de la excelencia ecuestre" />


    <section class="py-16 md:py-24 bg-[#f1ece6]/80">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="space-y-6">
                <p class="paragraph">
                    En el corazón del hipismo venezolano, Stud Royal surge como la nueva casa ecuestre donde
                    tradición, ciencia y visión se unen para formar leyendas. Un espacio donde cada detalle <span
                        class="italic">desde
                        la genética hasta el diseño</span> refleja nobleza, precisión y un compromiso absoluto con la
                    excelencia.
                </p>
            </div>
        </div>
    </section>

    <section id="historia" class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl font-bold mb-12 text-[var(--royal-espresso)] leading-none text-center">
                <span class="text-6xl mr-1 FortalezaPlain">N</span>uestra Historia: La Evolución de una Casa Hípica
                Moderna
            </h2>

            <div class="space-y-12 text-gray-700 relative hidden md:block">

                <div class="hidden md:block absolute left-1/2 w-0.5 bg-gray-200 h-full transform -translate-x-1/2">
                </div>

                @php
                    $historyItems = [
                        [
                            'title' => 'Inspiración y legado familiar',
                            'text' =>
                                'Stud Royal nace de una tradición ecuestre que recorre generaciones. Una pasión que comenzó en las tribunas de La Rinconada, donde las carreras representan más que competencia: son cultura, identidad y un símbolo del espíritu venezolano.',
                        ],
                        [
                            'title' => 'El encuentro entre tradición y visión',
                            'text' =>
                                'Durante décadas, el hipismo en Venezuela se consolidó como uno de los deportes con mayor arraigo nacional. En La Rinconada surgió la primera chispa de esta casa: la intención de elevar el deporte a estándares internacionales sin perder su esencia local.',
                        ],
                        [
                            'title' => 'El nacimiento de Stud Royal',
                            'text' =>
                                'La marca se formaliza como respuesta a un nuevo momento del hipismo: propietarios que buscan profesionalización, tecnología, genética, rendimiento medible y una estética impecable.',
                        ],
                        [
                            'title' => 'Innovación aplicada al desempeño',
                            'text' =>
                                'La incorporación de estudios genéticos, biometría, softwares de rendimiento y entrenamientos de precisión posicionan al stud como pionero.',
                        ],
                        [
                            'title' => 'El diseño como declaración de identidad',
                            'text' =>
                                'La estética burgundy, dorado royal y verde oliva — colores que representan nobleza, victoria y conexión con la tierra — consolidan a Stud Royal como una marca ecuestre de élite.',
                        ],
                    ];
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
                        <span class="text-6xl mr-1 FortalezaPlain">N</span>uestra Declaración de Grandeza
                    </h2>

                    <div class="space-y-4 text-gray-700">
                        <p class="font-serif italic text-xl text-gray-800 border-l-2 border-[#3C4220] pl-3">
                            "Hay casas que se construyen con ladrillos. Y otras, con legado."
                        </p>
                        <p class="paragraph">
                            Stud Royal nace del espíritu de quienes entienden que la grandeza no se improvisa: se
                            hereda, se entrena
                            y se perfecciona.
                        </p>
                        <p class="paragraph">
                            Somos la unión entre dos mundos: la nobleza de la tradición y la precisión de la ciencia.
                            Cada caballo,
                            cada carrera y cada decisión responde a una misma convicción: elevar el hipismo venezolano
                            hacia un
                            nuevo estándar.
                        </p>
                        <p class="paragraph">
                            Estudiamos la genética como arte, medimos el rendimiento como ciencia y cuidamos cada
                            detalle como un
                            acto de respeto hacia el linaje ecuestre.
                        </p>
                        <p class="paragraph">
                            Nuestra casa es burgundy, dorado royal y verde oliva. Es visión, elegancia y propósito.
                        </p>
                    </div>

                </div>

                <div
                    class="order-1 md:order-2 bg-gray-100 rounded-tl-2xl rounded-br-2xl shadow-xl overflow-hidden border border-gray-200">
                    <img src="{{ asset('images/sobreNosotros/1.avif') }}" alt="Stud Royal."
                        class="w-full h-80 md:h-[500px] object-cover">
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="order-2 md:order-1 bg-gray-100 rounded-br-2xl rounded-tl-2xl shadow-xl overflow-hidden">
                    <img src="{{ asset('images/sobreNosotros/2.avif') }}"
                        alt="Imagen de silla de montar representando filosofía y valores"
                        class="w-full h-80 md:h-[600px] object-cover">
                </div>

                <div class="order-1 md:order-2 lg:pl-8">
                    <h2 class="text-3xl font-bold mb-8 text-[var(--royal-espresso)] leading-none">
                        <span class="text-6xl mr-1 FortalezaPlain">F</span>ilosofía y Valores
                    </h2>

                    <h4 class="text-xl font-semibold text-[#3C4220] mb-3 pb-1 inline-block">
                        Filosofía</h4>
                    <p class="paragraph mb-8">
                        En Stud Royal creemos que la <span class="italic">excelencia es una práctica diaria</span>.
                        Nuestro propósito es honrar
                        el linaje ecuestre con una visión moderna: integrar la tradición del hipismo venezolano con la
                        innovación, la ciencia y el diseño contemporáneo.
                    </p>

                    <h4 class="text-xl font-semibold text-[#3C4220] mb-4 pb-1 inline-block">
                        Valores</h4>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 text-gray-700">
                        <div class="flex items-start">

                            <div>

                                <span class="font-bold block"><span
                                        class="text-[#B89871] text-xl mr-2 leading-none select-none">♦</span>Nobleza:</span>
                                <span class="text-sm">Actuamos con integridad y respeto inquebrantable.</span>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div>
                                <span class="font-bold block"><span
                                        class="text-[#B89871] text-xl mr-2 leading-none select-none">♦</span>Precisión:</span>
                                <span class="text-sm">Decisiones basadas en datos rigurosos y ciencia aplicada.</span>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div>
                                <span class="font-bold block"><span
                                        class="text-[#B89871] text-xl mr-2 leading-none select-none">♦</span>Tradición:</span>
                                <span class="text-sm">Honramos la rica historia y herencia del hipismo.</span>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div>
                                <span class="font-bold block"><span
                                        class="text-[#B89871] text-xl mr-2 leading-none select-none">♦</span>Innovación:</span>
                                <span class="text-sm">Tecnología y genética al servicio del máximo rendimiento.</span>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div>
                                <span class="font-bold block"><span
                                        class="text-[#B89871] text-xl mr-2 leading-none select-none">♦</span>Elegancia:</span>
                                <span class="text-sm">Una estética impecable en cada detalle y presentación.</span>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div>
                                <span class="font-bold block"><span
                                        class="text-[#B89871] text-xl mr-2 leading-none select-none">♦</span>Visión de
                                    Futuro:</span>
                                <span class="text-sm">Una casa que evoluciona, invirtiendo en el mañana del
                                    deporte.</span>
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
        @endphp
        <div class="max-w-7xl mx-auto px-4 pb-4">
            <h2 class="text-3xl font-bold mb-6 text-[var(--royal-espresso)]"></h2>
            <h2 class="text-3xl font-bold mb-6 text-[var(--royal-espresso)] leading-none">
                <span class="text-6xl mr-1 FortalezaPlain">N</span>uestra Casa en Imágenes
            </h2>
            <p class="paragraph">
                Cada espacio de Stud Royal refleja nuestra esencia: tradición, elegancia y precisión. Esta selección de
                imágenes muestra el universo visual y la dedicación detrás de cada detalle.
            </p>
        </div>

        @livewire('galeria-slider', ['images' => $galeria_about])
    </section>

    <section id="cta" class="bg-[var(--royal-espresso)] py-20">
        <div class="max-w-6xl mx-auto px-6 md:px-12 text-center">

            <h2 class="title-cta">
                Agenda tu visita a Stud Royal
            </h2>

            <p class="paragraph-cta">
                Conoce de cerca nuestra casa, nuestros procesos y la filosofía que nos mueve. Abrimos nuestras puertas
                para que propietarios, entrenadores y aliados vivan la experiencia Royal desde adentro.
                <br>
                <br>
                Agenda una visita personalizada y comienza a formar parte del linaje de la excelencia.
            </p>

            <a href="{{ route('contact') }}#formulario" class="btn-cta">
                Agenda tu visita
            </a>

        </div>
    </section>

</x-layouts.public>
