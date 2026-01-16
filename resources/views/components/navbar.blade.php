<div>
    <nav id="navbar"
        class="fixed top-0 left-0 w-full z-50 transition-all duration-300 
               bg-transparent 
               backdrop-blur-md bg-white/10 md:backdrop-blur-none md:bg-transparent
               md:hover:backdrop-blur-md md:hover:bg-white/10">

        <div class="max-w-7xl mx-auto px-4 py-1 flex items-center justify-between md:justify-center relative">
            
            <div class="absolute right-14 md:right-4 flex gap-1 items-center text-xs md:text-sm font-bold">
                @php $current = app()->getLocale(); @endphp
                <a href="{{ route('setLocale', 'es') }}"
                    class="px-2 py-1 rounded transition-colors {{ $current === 'es' ? 'text-white bg-[#C8AF77]/20' : 'text-[#C8AF77]' }}">
                    ES
                </a>
                <span class="text-[#C8AF77]/50">|</span>
                <a href="{{ route('setLocale', 'en') }}"
                    class="px-2 py-1 rounded transition-colors {{ $current === 'en' ? 'text-white bg-[#C8AF77]/20' : 'text-[#C8AF77]' }}">
                    EN
                </a>
            </div>

            <ul class="hidden md:flex space-x-6 font-medium order-1 md:mr-12">
                <li><a href="{{ route('about') }}"
                        class="text-[#C8AF77] text-shadow-lg hover:text-[var(--royal-mist)] uppercase">{{ __('site.nav.about') }}</a>
                </li>
                <li><a href="{{ route('services') }}"
                        class="text-[#C8AF77] text-shadow-lg hover:text-[var(--royal-mist)] uppercase">{{ __('site.nav.services') }}</a>
                </li>
            </ul>

            <a href="{{ route('home') }}" class="block order-2">
                <img loading="lazy" src="{{ asset('images/logo/logo-gold.png') }}" alt="Stud Royal Logo"
                    class="h-20 w-auto" />
            </a>

            <ul class="hidden md:flex space-x-6 font-medium order-3 md:ml-12">
                <li><a href="{{ route('contact') }}"
                        class="text-[#C8AF77] text-shadow-lg hover:text-[var(--royal-mist)] uppercase">{{ __('site.nav.contact') }}</a>
                </li>
                <li><a href="{{ route('location') }}"
                        class="text-[#C8AF77] text-shadow-lg hover:text-[var(--royal-mist)] uppercase">{{ __('site.nav.location') }}</a>
                </li>
            </ul>

            <button id="menuBtn"
                class="md:hidden block text-2xl order-3 absolute right-4 text-[#C8AF77] text-shadow-lg">
                ☰
            </button>
        </div>

        <ul id="mobileMenu" class="md:hidden hidden flex-col space-y-4 mt-4 p-4 rounded-lg font-medium">
            <li><a class="text-[#C8AF77] text-shadow-lg uppercase" href="{{ route('about') }}">{{ __('site.nav.about') }}</a></li>
            <li><a class="text-[#C8AF77] text-shadow-lg uppercase" href="{{ route('services') }}">{{ __('site.nav.services') }}</a></li>
            <li><a class="text-[#C8AF77] text-shadow-lg uppercase" href="{{ route('contact') }}">{{ __('site.nav.contact') }}</a></li>
            <li><a class="text-[#C8AF77] text-shadow-lg uppercase" href="{{ route('location') }}">{{ __('site.nav.location') }}</a></li>
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
                TOP_CLASSES.forEach(cls => navbar.classList.remove(cls));
                MD_NO_BLUR.forEach(cls => navbar.classList.remove(cls));
                SCROLL_CLASSES.forEach(cls => navbar.classList.add(cls));
            } else {
                SCROLL_CLASSES.forEach(cls => navbar.classList.remove(cls));
                TOP_CLASSES.forEach(cls => navbar.classList.add(cls));
                MD_NO_BLUR.forEach(cls => navbar.classList.add(cls));
            }
        });

        window.dispatchEvent(new Event('scroll'));
    </script>
</div>