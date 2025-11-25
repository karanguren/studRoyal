{{-- <header class="lg:h-[43vh] h-[55vh] flex items-center justify-center text-center bg-gray-50 border-b border-gray-200 w-full" 
        style="background-image: url('{{ $backgroundUrl ?? 'ruta/a/una/imagen/por/defecto.jpg' }}'); background-size: cover; background-position: center;">
    <div class="max-w-4xl mx-auto p-4">
        
        <p class="text-4xl lg:text-6xl mb-6 text-[var(--royal-ash)] FortalezaPlain">
            {{ $title }}
        </p>

        <h2 class="text-xs tracking-widest uppercase font-semibold text-gray-500 mb-2">
            {{ $description }}
        </h2>
        
    </div>
</header> --}}

<header class="relative w-full lg:h-[43vh] h-[55vh] flex items-center justify-center text-center"
    style="background-image: url('{{ $backgroundUrl ?? 'default.jpg' }}'); background-size: cover; background-position: center;">

    <div class="max-w-4xl mx-auto p-4 w-full">

        <!-- TÍTULO -->
        <p class="text-4xl lg:text-6xl text-white FortalezaPlain 
                   absolute bottom-4 left-1/2 -translate-x-1/2 
                   lg:static lg:translate-x-0 lg:bottom-auto">
            {{ $title }}
        </p>

    </div>
</header>

<!-- DESCRIPCIÓN FUERA DEL HEADER -->
<p class="text-center text-xs tracking-widest uppercase font-semibold text-gray-500 m-4">
    {{ $description }}
</p>
