<div class="w-full">
    <div class="carousel-galeria" wire:ignore data-flickity='{ "wrapAround": true, "autoPlay": 3000 }'>
        @foreach ($images as $image)
            <img 
                src="{{ $image['url'] }}" 
                alt="Miniatura {{ $image['id'] }}" 
                class="carousel-cell-image cursor-pointer w-full h-auto lg:w-1/2 lg:h-auto object-cover"
                wire:click="openModal({{ $image['id'] }})"
            />
        @endforeach
    </div>

    @if ($showModal)
        <div class="fixed inset-0 z-50 flex items-center justify-center p-4">
            <div class="absolute inset-0 bg-[#3C4220]/50 opacity-80"  wire:click="closeModal" ></div>

            <div class="relative rounded-lg shadow-2xl overflow-hidden z-10 w-[120vw] h-[80vh] md:max-w-6xl md:max-h-[85vh] bg-cover bg-center" style="background-image: url('{{ $selectedImage['url'] ?? '' }}');">
                
                <div class="absolute inset-0 bg-black/30"></div>

                <button class="absolute top-4 right-4 text-white hover:text-gray-300 text-3xl font-bold z-30"wire:click="closeModal">
                    &times;
                </button>

                <div class="absolute bottom-0 left-0 right-0 p-6 z-30 bg-black/70 text-center text-white">
                    
                    <h3 class="text-xl font-semibold mb-1">
                        Detalles de la Imagen
                    </h3>
                    <p class="text-base font-light">
                        {{ $selectedImage['description'] ?? 'No hay descripción disponible.' }}
                    </p>
                </div>
                
            </div>
        </div>
    @endif
</div>