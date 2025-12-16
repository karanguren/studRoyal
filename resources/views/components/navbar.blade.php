<div>
    <nav id="navbar"
        class="fixed top-0 left-0 w-full z-50 transition-all duration-300 
               bg-transparent 
               backdrop-blur-md bg-white/10 md:backdrop-blur-none md:bg-transparent
               md:hover:backdrop-blur-md md:hover:bg-white/10">

        <div class="max-w-7xl mx-auto px-4 py-1 flex items-center justify-between md:justify-center relative">

            <ul class="hidden md:flex space-x-6 font-medium order-1 md:mr-12">
                <li><a href="{{ route('about') }}"
                        class="text-[#C8AF77] text-shadow-lg hover:text-[var(--royal-mist)] uppercase">Sobre
                        nosotros</a></li>
                <li><a href="{{ route('services') }}"
                        class="text-[#C8AF77] text-shadow-lg hover:text-[var(--royal-mist)] uppercase">Servicios</a>
                </li>
            </ul>

            <a href="{{ route('home') }}" class="block order-2">
                <img loading="lazy" src="{{ asset('images/logo/logo-gold.png') }}" alt="Stud Royal Logo"
                    class="h-20 w-auto" />
            </a>

            <ul class="hidden md:flex space-x-6 font-medium order-3 md:ml-12">
                <li><a href="{{ route('contact') }}"
                        class="text-[#C8AF77] text-shadow-lg hover:text-[var(--royal-mist)] uppercase">Contacto</a>
                </li>
                <li><a href="{{ route('location') }}"
                        class="text-[#C8AF77] text-shadow-lg hover:text-[var(--royal-mist)] uppercase">Ubícanos</a>
                </li>
            </ul>

            <button id="menuBtn"
                class="md:hidden block text-2xl order-3 absolute right-4 text-[#C8AF77] text-shadow-lg">
                ☰
            </button>
        </div>

        <ul id="mobileMenu" class="md:hidden hidden flex-col space-y-4 mt-4 p-4 rounded-lg font-medium">
            <li><a class="text-[#C8AF77] text-shadow-lg uppercase" href="{{ route('about') }}">Sobre nosotros</a></li>
            <li><a class="text-[#C8AF77] text-shadow-lg uppercase" href="{{ route('services') }}">Servicios</a></li>
            <li><a class="text-[#C8AF77] text-shadow-lg uppercase" href="{{ route('contact') }}">Contacto</a></li>
            <li><a class="text-[#C8AF77] text-shadow-lg uppercase" href="{{ route('location') }}">Ubícanos</a></li>
        </ul>
    </nav>

    <script>
        const navbar = document.getElementById("navbar");

        document.getElementById('menuBtn').addEventListener('click', () => {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
            menu.classList.toggle('flex');
        });

        const SCROLL_CLASSES = ["backdrop-blur-md", "bg-white/10"];

        const TOP_CLASSES = ["md:hover:backdrop-blur-md", "md:hover:bg-white/10"];

        const MD_NO_BLUR = ["md:backdrop-blur-none", "md:bg-transparent"];


        window.addEventListener("scroll", () => {
            if (window.scrollY > 10) {
                // ESTADO SCROLLED (Blur Fijo en Desktop)

                // 1. Quitar la lógica de hover y de transparencia total en Desktop
                TOP_CLASSES.forEach(cls => navbar.classList.remove(cls));
                MD_NO_BLUR.forEach(cls => navbar.classList.remove(cls));

                // 2. Aplicar el blur y fondo fijo en Desktop
                SCROLL_CLASSES.forEach(cls => navbar.classList.add(cls));

            } else {
                // ESTADO TOP (Transparente, Hover Blur en Desktop)

                // 1. Quitar la lógica del scroll blur/fondo
                SCROLL_CLASSES.forEach(cls => navbar.classList.remove(cls));

                // 2. Aplicar la lógica de hover y la transparencia total en Desktop
                TOP_CLASSES.forEach(cls => navbar.classList.add(cls));
                MD_NO_BLUR.forEach(cls => navbar.classList.add(cls));
            }
        });

        // Ejecutar la función de scroll una vez para asegurar el estado inicial TOP en desktop
        window.dispatchEvent(new Event('scroll'));
    </script>
</div>
