<x-layouts.public title="Stud Royal - El linaje de la excelencia">
    {{-- Selector de idioma --}}
    <div class="fixed top-4 right-4 z-50 flex gap-2">
        @php $current = app()->getLocale(); @endphp
        <a href="{{ route('setLocale', 'es') }}"
            class="px-3 py-1 rounded {{ $current === 'es' ? 'bg-[#3C4220] text-white' : 'bg-white/70' }}">
            ES
        </a>
        <a href="{{ route('setLocale', 'en') }}"
            class="px-3 py-1 rounded {{ $current === 'en' ? 'bg-[#3C4220] text-white' : 'bg-white/70' }}">
            EN
        </a>
    </div>

    <livewire:welcome-page />
</x-layouts.public>
