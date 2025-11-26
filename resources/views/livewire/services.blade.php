<x-layouts.public>
    <x-slot:title>
        Servicios | Stud Royal
    </x-slot:title>

    <x-module-header 
        title="Servicios Ecuestres de Excelencia" 
        description="En Stud Royal ofrecemos un ecosistema integral de servicios diseñados para elevar el rendimiento, bienestar y linaje de cada ejemplar."
    />

    <section class="py-16 md:py-24 bg-[#f1ece6]/80">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <div class="space-y-6 text-lg text-gray-700 leading-7">
                    <p class="paragraph">
                        En Stud Royal desarrollamos todos los servicios que conforman la cadena ecuestre profesional.
                        Nuestra casa integra ciencia, tradición, manejo técnico y diseño para ofrecer una experiencia
                        completa: cría, entrenamiento, cuidado veterinario, gestión estratégica y preparación para
                        competencias.
                    </p>
                    <p class="paragraph">
                        Cada servicio es ejecutado por especialistas que combinan conocimiento técnico, sensibilidad
                        ecuestre y una visión moderna del hipismo venezolano. Nuestro enfoque es integral: cuidamos la
                        vida, el rendimiento y el linaje de cada caballo, asegurando su desarrollo en cada etapa.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- VERSION 2 --}}

    <section id="servicios-principales" class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- TÍTULO PRINCIPAL DE LA SECCIÓN --}}
            {{-- <div class="text-center mb-16">
                <p class="text-4xl md:text-5xl font-extrabold text-[#3C4220] leading-tight">Servicios Esenciales de Stud
                    Royal</p>
            </div> --}}

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                {{-- Tarjeta 1: Cría y Selección Genética --}}
                <div
                    class="bg-gray-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border border-gray-100 flex flex-col">
                    <div class="text-3xl text-[#3C4220] mb-4">
                        <i class="fas fa-crown"></i>
                    </div>
                    <h4 class="text-xl font-semibold text-gray-900 mb-3">DescriCría y Selección Genética</h4>
                    <p class="text-gray-600 text-sm mb-4 flex-grow">
                        Estudiamos el linaje, la morfología y la genética de cada ejemplar para asegurar crías de alto rendimiento. Utilizamos técnicas modernas de análisis y fichas de ascendencia que permiten proyectar atributos como velocidad, resistencia y temperamento.
                    </p>
                    <div class="mt-auto">
                        <img src="{{ asset('images/servicios/1.jpg') }}"
                            alt=""
                            class="w-full h-48 object-cover rounded-md mt-4 shadow-sm">
                    </div>
                </div>

                {{-- Tarjeta 2: Entrenamiento de Alto Rendimiento --}}
                <div
                    class="bg-gray-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border border-gray-100 flex flex-col">
                    <div class="text-3xl text-[#3C4220] mb-4">
                        <i class="fas fa-running"></i>
                    </div>
                    <h4 class="text-xl font-semibold text-gray-900 mb-3">Entrenamiento de Alto Rendimiento</h4>
                    <p class="text-gray-600 text-sm mb-4 flex-grow">
                        Nuestros métodos de entrenamiento combinan biomecánica, observación técnica y herramientas digitales de medición. Cada ejemplar recibe un plan personalizado que optimiza su desempeño sin comprometer su bienestar.
                    </p>
                    <div class="mt-auto">
                        <img src="{{ asset('images/servicios/2.jpg') }}"
                            alt=""
                            class="w-full h-48 object-cover rounded-md mt-4 shadow-sm">
                    </div>
                </div>

                {{-- Tarjeta 3: Manejo, Cuidado y Bienestar Integral --}}
                <div
                    class="bg-gray-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border border-gray-100 flex flex-col">
                    
                    <h4 class="text-xl font-semibold text-gray-900 mb-3">Manejo, Cuidado y Bienestar Integral</h4>
                    <p class="text-gray-600 text-sm mb-4 flex-grow">
                        Aplicamos protocolos modernos de alimentación, descanso, hidratación, rutinas físicas y estimulación emocional. El enfoque prioriza la salud integral del caballo: cuerpo, comportamiento y entorno.
                    </p>
                    <div class="mt-auto">
                        <img src="{{ asset('images/servicios/3.jpg') }}" alt=""
                            class="w-full h-48 object-cover rounded-md mt-4 shadow-sm">
                    </div>
                </div>

                {{-- Tarjeta 4: Veterinaria Especializada --}}
                <div
                    class="bg-gray-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border border-gray-100 flex flex-col">
                    
                    <h4 class="text-xl font-semibold text-gray-900 mb-3">Veterinaria Especializada</h4>
                    <p class="text-gray-600 text-sm mb-4 flex-grow">
                        Supervisión veterinaria permanente, terapias regenerativas, monitoreos digitales, diagnósticos especializados y planes preventivos que aseguran la longevidad y salud óptima del ejemplar.
                    </p>
                    <div class="mt-auto">
                        <img src="{{ asset('images/servicios/4.jpg') }}"
                            alt=""
                            class="w-full h-48 object-cover rounded-md mt-4 shadow-sm">
                    </div>
                </div>

                {{-- Tarjeta 5: Gestión Estratégica del Potencial del Caballo --}}
                <div
                    class="bg-gray-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border border-gray-100 flex flex-col">
                    
                    <h4 class="text-xl font-semibold text-gray-900 mb-3">Gestión Estratégica del Potencial del Caballo
                    </h4>
                    <p class="text-gray-600 text-sm mb-4 flex-grow">
                        Acompañamos a los propietarios en decisiones clave: debut, campañas, ritmo de competencia, potencial reproductivo, valorización y proyección del ejemplar.
                    </p>
                    <div class="mt-auto">
                        <img src="{{ asset('images/servicios/5.jpg') }}"
                            alt=""
                            class="w-full h-48 object-cover rounded-md mt-4 shadow-sm">
                    </div>
                </div>

                {{-- Tarjeta 6: Preparación y Presentación en Competencias --}}
                <div
                    class="bg-gray-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border border-gray-100 flex flex-col">
                    
                    <h4 class="text-xl font-semibold text-gray-900 mb-3">Preparación y Presentación en Competencias
                    </h4>
                    <p class="text-gray-600 text-sm mb-4 flex-grow">
                        Asesoramos todo el proceso de carrera: equipamiento, estética del caballo y del equipo, protocolos de pre-pista, paddock y estrategias de presentación.
                    </p>
                    <div class="mt-auto">
                        <img src="{{ asset('images/servicios/6.jpg') }}"
                            alt=""
                            class="w-full h-48 object-cover rounded-md mt-4 shadow-sm">
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
                    
                    <h4 class="text-xl font-semibold text-[#3C4220] mb-3">Equipamiento, Uniformes y Estética Institucional</h4>
                    <p class="text-gray-600 text-sm mb-4 flex-grow">
                        Diseño y desarrollo de piezas estéticas y funcionales: mantas, protectores, bordados, sillas, placas, uniformes y elementos que representan la identidad Royal.
                    </p>
                    <div class="mt-auto">
                        <img src="{{ asset('images/galeria/4.jpg') }}"
                            alt="Equipamiento y uniformes ecuestres"
                            class="w-full h-48 object-cover object-left rounded-md mt-4 shadow-sm">
                    </div>
                </div>

                {{-- Tarjeta 2: Asesoría en Adquisición y Evaluación de Ejemplares --}}
                <div
                    class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300 border border-gray-200 flex flex-col">
                    
                    <h4 class="text-xl font-semibold text-[#3C4220] mb-3">Asesoría en Adquisición y Evaluación de Ejemplares</h4>
                    <p class="text-gray-600 text-sm mb-4 flex-grow">
                        Acompañamiento experto en compra o evaluación con análisis técnico, genético y funcional que garantiza decisiones estratégicas.
                    </p>
                    <div class="mt-auto">
                        <img src="{{ asset('images/galeria/1.jpg') }}"
                            alt="Asesoría en adquisición de caballos"
                            class="w-full h-48 object-cover rounded-md mt-4 shadow-sm">
                    </div>
                </div>

                {{-- Tarjeta 3: Gestión Documental y Administrativa Ecuestre --}}
                <div
                    class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300 border border-gray-200 flex flex-col">
                    
                    <h4 class="text-xl font-semibold text-[#3C4220] mb-3">Gestión Documental y Administrativa Ecuestre
                    </h4>
                    <p class="text-gray-600 text-sm mb-4 flex-grow">
                        Manejo de registros, fichas de carrera, historiales médicos, permisos, documentación formal y toda la estructura administrativa del stud.
                    </p>
                    <div class="mt-auto">
                        <img src="{{ asset('images/servicios/7.jpg') }}"
                            alt="Documentación administrativa ecuestre"
                            class="w-full h-48 object-cover rounded-md mt-4 shadow-sm">
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section id="cta" class="bg-[var(--royal-espresso)] py-20">
        <div class="max-w-6xl mx-auto px-6 md:px-12 text-center">

            <h2 class="title-cta FortalezaPlain">
                Construimos el futuro de cada ejemplar con precisión, visión y linaje.
            </h2>

            <p class="paragraph-cta">
                Agenda una visita personalizada y descubre lo que significa formar parte de Stud Royal.
            </p>

            <a href="{{ route('contact') }}#formulario" class="btn-cta">
                Agenda tu visita
            </a>

        </div>
    </section>

</x-layouts.public>
