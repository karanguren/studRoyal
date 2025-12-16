<div class="w-full">
    <div wire:ignore data-flickity='{ "wrapAround": true, "autoPlay": 3000 }'>
        @foreach ($images as $image)
            <img src="{{ $image['url'] }}" alt="Miniatura {{ $image['id'] }}"
                class="carousel-cell-image cursor-pointer w-full h-auto lg:w-1/2 lg:h-auto object-cover"
                wire:click="openModal({{ $image['id'] }})" />
        @endforeach
    </div>

    @if ($showModal)
        <div class="fixed inset-0 z-50 flex items-center justify-center p-4">
            <div class="absolute inset-0 bg-[#3C4220]/50 opacity-80" wire:click="closeModal"></div>

            <div class="relative rounded-lg shadow-2xl overflow-hidden z-10 p-0 max-w-[90vw] max-h-[90vh]">

                <img loading="lazy" src="{{ asset('images/galeria/' . $selectedImage['id'] . '.1.avif') }}"
                    alt="Imagen de Galería" class="block w-auto h-auto max-w-[90vw] max-h-[90vh] rounded-lg">

                <div class="absolute inset-0 bg-black/30 pointer-events-none"></div>

                <button class="absolute top-4 right-4 text-white hover:text-gray-300 text-3xl font-bold z-30"
                    wire:click="closeModal">
                    &times;
                </button>

            </div>
        </div>
    @endif
</div>
