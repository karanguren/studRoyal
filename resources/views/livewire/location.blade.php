<x-layouts.public>
    <x-slot:title>
        Ubícanos | Stud Royal
    </x-slot:title>

    <x-module-header title="Donde Encontrarnos" description="Dos espacios para vivir la experiencia Stud Royal"
        backgroundUrl="images/home/5.avif" />

    <section class="py-16 md:py-24 bg-[#f1ece6]/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16">

                <div class="space-y-8">

                    <div class="bg-white p-8 rounded-xl shadow-xl transition duration-300 hover:shadow-2xl">
                        <h3 class="text-3xl font-extrabold text-[#3C4220] mb-4">LA RINCONADA</h3>
                        <div class="text-lg text-gray-700 space-y-4">
                            <div class="flex items-start">
                                <p class="paragraph">Estamos ubicados dentro del entorno ecuestre del Hipódromo La
                                    Rinconada, Caracas – Venezuela.</p>
                            </div>
                        </div>
                    </div>

                    <hr class="border-gray-300">

                    <div>
                        <h3 class="text-2xl font-serif mb-3 text-gray-800">Coordinación de Citas</h3>
                        <p class="text-lg text-gray-600 border-l-4 border-[#3C4220] pl-4 italic">
                            "Coordinamos visitas únicamente con cita previa para garantizar una experiencia adecuada y
                            segura para nuestros ejemplares."
                        </p>
                    </div>
                    <div class="flex justify-center lg:justify-start">
                        <a href="{{ route('contact') }}" class="btn-cta">
                            Agenda tu visita
                        </a>
                    </div>
                </div>

                <div class="space-y-6">

                    <div class="relative w-full aspect-video md:aspect-[4/3] rounded-xl overflow-hidden shadow-2xl">

                        <div class="w-full h-full">
                            <iframe
                                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB2NIWI3Tv9iDPrlnowr_0ZqZWoAQydKJU&q=La%20Rinconada%2C%20Caracas%2C%20Distrito%20Capital%2C%20Venezuela&maptype=roadmap"
                                width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""
                                aria-hidden="false" tabindex="0"
                                class="filter grayscale saturate-100 sepia-0 transition duration-500 hover:sepia-0 hover:saturate-100 w-full h-full"></iframe>
                        </div>
                    </div>

                    <p class="text-center text-sm font-medium text-gray-500">
                        COORDENADAS LA RINCONADA | 10.2015°N 66.8362°O
                    </p>

                </div>
            </div>
        </div>
    </section>

</x-layouts.public>
