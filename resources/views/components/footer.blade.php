<footer class="bg-[var(--royal-mist)] text-[#371200] pt-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">

        <div class="flex flex-col items-center gap-6 sm:flex-row sm:justify-between sm:items-start">

            <div class="h-32 w-auto">
                <img src="{{ asset('images/logo/logo-black.png') }}" alt="Stud Royal Logo" class="h-full w-auto mx-auto" />
            </div>

            <div class="text-center text-sm space-y-1 sm:text-right">
                <p class="font-medium">info@studroyalty.com | +58 (424) 818-1408</p>
                <p class="text-sm">La Rinconada, Caracas – Venezuela</p>
            </div>
        </div>

        <hr class="border-[var(--border-soft)]">

        <div class="flex flex-wrap gap-x-6 gap-y-2 text-sm font-medium justify-center sm:justify-start">
            <a href="#" class="hover:text-[var(--royal-clay)] uppercase">INICIO</a>
            <a href="{{ route('about') }}" class="hover:text-[var(--royal-clay)] uppercase">SOBRE NOSOTROS</a>
            <a href="{{ route('services') }}" class="hover:text-[var(--royal-clay)] uppercase">SERVICIOS</a>
            <a href="{{ route('location') }}" class="hover:text-[var(--royal-clay)] uppercase">UBÍCANOS</a>
            <a href="{{ route('contact') }}" class="hover:text-[var(--royal-clay)] uppercase">CONTACTO</a>
        </div>

        <div class="flex flex-wrap gap-x-6 gap-y-2 text-sm font-medium uppercase justify-center sm:justify-end">
            <a href="https://www.instagram.com/studroyal_" target="_blank"
                class="hover:text-[var(--royal-clay)]">INSTAGRAM</a>
            <a href="https://www.tiktok.com/@stud.royal" target="_blank"
                class="hover:text-[var(--royal-clay)]">TIKTOK</a>
            <a href="https://x.com/StudRoyal_" target="_blank" class="hover:text-[var(--royal-clay)]">X</a>
        </div>

        <hr class="border-[var(--border-soft)]">

        <div class="pt-2 pb-6 text-center text-xs text-[var(--text-soft)]">
            <p>© 2025 Stud Royal. Todos los derechos reservados.</p>
        </div>

    </div>
</footer>
