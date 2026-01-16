<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/sobre-nosotros', function () {
    return view('livewire.about'); 
})->name('about');

Route::get('/servicios', function () {
    return view('livewire.services'); 
})->name('services');

Route::get('/contacto', function () {
    return view('livewire.contact'); 
})->name('contact');

Route::get('/ubicacion', function () {
    return view('livewire.location'); 
})->name('location');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('user-password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');

    Volt::route('settings/two-factor', 'settings.two-factor')
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
});

// RUTA: setear locale en sesión + cookie y redirigir atrás
Route::get('/locale/{locale}', function ($locale) {
    $allowed = ['es', 'en'];
    if (!in_array($locale, $allowed)) {
        abort(404);
    }

    // Guardar en sesión
    session(['locale' => $locale]);

    // Redirigir atrás y añadir cookie permanente del locale
    return redirect()->back()->withCookie(cookie()->forever('locale', $locale));
})->name('setLocale');

// Aplicar el locale antes de renderizar vistas (usa sesión o cookie)
View::composer('*', function ($view) {
    $locale = session('locale') ?: request()->cookie('locale') ?: config('app.locale');
    if ($locale && in_array($locale, ['es', 'en'])) {
        app()->setLocale($locale);
    }
});
