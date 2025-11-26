<x-layouts.public>
    <x-slot:title>
        Contáctanos | Stud Royal
    </x-slot:title>


     <x-module-header
        title="Contacto"
        description="Ponte en contacto con nuestra casa ecuestre"
        backgroundUrl="images/home/5.jpg"
    />

    <section id="contactos" class="py-16 md:py-16 bg-[#f1ece6]/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            
            {{-- <h2 class="text-xs tracking-widest uppercase font-semibold text-gray-500 mb-2">
                CONTACTO DIRECTO
            </h2> --}}
            <p class="max-w-4xl mx-auto text-lg text-gray-600 mb-8 ">
                Nuestro equipo responderá tu solicitud con la discreción, calidad y atención que caracterizan a nuestra casa.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <div class="bg-white p-6 md:p-8 border border-gray-200 rounded-lg shadow-sm transition duration-300 hover:shadow-lg">
                    <i class="fas fa-phone-alt text-2xl text-[#3C4220] mb-4"></i>
                    <h3 class="font-semibold text-lg text-gray-800 mb-2 tracking-wider uppercase">
                        Teléfono
                    </h3>
                    <p class="text-2xl font-medium text-[#3C4220] mb-4">
                        +58 (xxx) xxx-xxxx
                    </p>
                    <p class="text-sm text-gray-600">
                        Atención directa y asistencia personalizada para consultas y coordinación de visitas.
                    </p>
                </div>

                <div class="bg-white p-6 md:p-8 border border-gray-200 rounded-lg shadow-sm transition duration-300 hover:shadow-lg">
                    <i class="fas fa-envelope text-2xl text-[#3C4220] mb-4"></i>
                    <h3 class="font-semibold text-lg text-gray-800 mb-2 tracking-wider uppercase">
                        Correo electrónico
                    </h3>
                    <p class="text-xl font-medium text-[#3C4220] mb-4">
                        info@studroyalty.com
                    </p>
                    <p class="text-sm text-gray-600">
                        Para solicitudes formales, alianzas, documentación o información general.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id='formulario'>
        @livewire('contact-form')
    </section>


</x-layouts.public>
