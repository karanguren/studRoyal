<div>
    <nav id="navbar" class="fixed top-0 left-0 w-full z-50 transition-all duration-300 backdrop-blur-md md:backdrop-blur-none md:hover:backdrop-blur-md">
        <div class="max-w-7xl mx-auto px-4 py-1 flex items-center justify-between md:justify-center relative">
            <ul class="hidden md:flex space-x-6 font-medium order-1 md:mr-12">
                <li><a href="{{ route('about') }}" class="text-[#A37247] hover:text-[var(--royal-mist)] uppercase">Sobre nosotros</a></li>
                <li><a href="{{ route('services') }}" class="text-[#A37247] hover:text-[var(--royal-mist)] uppercase">Servicios</a></li>
            </ul>

            <a href="{{ route('home') }}" class="block order-2">
            <img src="{{asset('images/logo/logo-gold.png')}}" 
                alt="Stud Royal Logo" 
                class="h-20 w-auto" />
            </a>

            <ul class="hidden md:flex space-x-6 font-medium order-3 md:ml-12">
                <li><a href="{{ route('contact') }}" class="text-[#A37247] hover:text-[var(--royal-mist)] uppercase">Contacto</a></li>
                <li><a href="{{ route('location') }}" class="text-[#A37247] hover:text-[var(--royal-mist)] uppercase">Ubícanos</a></li>
            </ul>

            <button id="menuBtn" class="md:hidden block text-2xl order-3 absolute right-4 text-[#A37247]">
                ☰
            </button>
        </div>

        <ul id="mobileMenu"
            class="md:hidden hidden flex-col space-y-4 mt-4 backdrop-blur p-4 rounded-lg font-medium bg-white/0">
            <li><a class="text-[#A37247] uppercase" href="{{ route('about') }}">Sobre nosotros</a></li>
            <li><a class="text-[#A37247] uppercase" href="{{ route('services') }}">Servicios</a></li>
            <li><a class="text-[#A37247] uppercase" href="{{ route('contact') }}">Contacto</a></li>
            <li><a class="text-[#A37247] uppercase" href="{{ route('location') }}">Ubícanos</a></li>
        </ul>
    </nav>

    <script>
        const navbar = document.getElementById("navbar");
        document.getElementById('menuBtn').addEventListener('click', () => {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
            menu.classList.toggle('flex');
        });

        window.addEventListener("scroll", () => {
            if (window.scrollY > 10) {
                navbar.classList.add("blur-bg");
                navbar.classList.remove("md:hover:backdrop-blur-md");
                navbar.classList.add("backdrop-blur-md", "bg-white/0"); 
                
            } else {
                navbar.classList.remove("blur-bg");
                navbar.classList.add("md:hover:backdrop-blur-md");
                navbar.classList.remove("backdrop-blur-md"); 
            }
        });
    </script>
</div>