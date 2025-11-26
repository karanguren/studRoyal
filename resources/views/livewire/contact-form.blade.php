<div>
    <section id="formulario" class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-start">

                <div class="p-4 md:p-8">

                    <p class="text-sm italic text-gray-500 mb-2">PLANIFICA TU ENCUENTRO</p>
                    <h2 class="text-3xl md:text-5xl font-serif text-gray-900 mb-6 leading-tight">
                        ¿Quieres conocer Stud Royal en persona?
                    </h2>
                    <p class="text-gray-600 mb-8">
                        Coordinamos visitas guiadas exclusivamente mediante cita previa. Escríbenos para agendar tu
                        recorrido y vivir de cerca la experiencia Royal.
                    </p>


                    <blockquote class="border-l-4 border-[#3C4220] pl-4 mb-8">
                        <p class="text-xl italic text-gray-700">
                            "La excelencia se construye en cada detalle, incluso en cómo te recibimos."
                        </p>
                    </blockquote>


                    <p class="text-gray-600 mb-8">
                        Completa el formulario y nuestro equipo se pondrá en contacto contigo a la brevedad. Por favor,
                        proporciona la información necesaria para que podamos atender tu solicitud de forma precisa.
                    </p>

                </div>

                <div class="bg-white p-6 md:p-10 rounded-lg shadow-xl border border-gray-200">

                    <h3 class="text-2xl font-bold text-gray-800 mb-4 uppercase text-center">
                        Envíanos un mensaje
                    </h3>

                    @if ($successMessage)
                        @php
                            $isError = str_contains($successMessage, '⚠️ Error');
                            $bgClass = $isError ? 'bg-red-100 text-red-800' : 'bg-green-100 text-green-800';
                        @endphp

                        <div class="p-4 mb-6 text-sm rounded-lg {{ $bgClass }}" role="alert">
                            {{ $successMessage }}
                        </div>
                    @endif

                    <form wire:submit.prevent="submitForm">
                        <div class="space-y-4">

                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nombre y
                                    apellido <span class="text-red-500">*</span></label>
                                <input type="text" id="name" wire:model.blur="name"
                                    class="w-full px-4 py-2 border @error('name') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-[#3C4220] focus:border-[#3C4220] transition duration-150"
                                    placeholder="Ej: Sofía Rodríguez">
                                @error('name')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Correo
                                    electrónico <span class="text-red-500">*</span></label>
                                <input type="email" id="email" wire:model.blur="email"
                                    class="w-full px-4 py-2 border @error('email') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-[#3C4220] focus:border-[#3C4220] transition duration-150"
                                    placeholder="correo@dominio.com">
                                @error('email')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="phone"
                                    class="block text-sm font-medium text-gray-700 mb-1">Teléfono</label>
                                <input type="text" id="phone" wire:model.blur="phone"
                                    class="w-full px-4 py-2 border @error('phone') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-[#3C4220] focus:border-[#3C4220] transition duration-150"
                                    placeholder="Código país + número">
                                @error('phone')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Motivo de
                                    contacto <span class="text-red-500">*</span></label>
                                <input type="text" id="subject" wire:model.blur="subject"
                                    class="w-full px-4 py-2 border @error('subject') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-[#3C4220] focus:border-[#3C4220] transition duration-150"
                                    placeholder="Ej: Solicitud de visita guiada">
                                @error('subject')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Mensaje <span
                                        class="text-red-500">*</span></label>
                                <textarea id="message" wire:model.blur="message" rows="5"
                                    class="w-full px-4 py-2 border @error('message') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-[#3C4220] focus:border-[#3C4200] transition duration-150"
                                    placeholder="Incluye detalles de tus ejemplares, objetivos deportivos o preguntas específicas."></textarea>
                                @error('message')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-8 text-center">
                            <button type="submit" class="w-full btn-cta" wire:loading.attr="disabled"
                                wire:target="submitForm">
                                <span wire:loading.remove wire:target="submitForm">
                                    ENVIAR SOLICITUD
                                </span>
                                <span wire:loading wire:target="submitForm">
                                    Enviando...
                                </span>
                            </button>
                            <p class="mt-4 text-xs text-gray-500">
                                Los campos marcados con <span class="text-red-500">*</span> son obligatorios.
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('livewire:initialized', () => {
            @this.on('form-submitted', () => {
                setTimeout(() => {
                    @this.successMessage = '';
                }, 5000);
            });
        });
    </script>
</div>
