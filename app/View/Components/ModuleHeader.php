<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;

class ModuleHeader extends Component
{
    // 1. Definir las propiedades públicas que se esperan recibir
    public $title;
    public $description;
    public $backgroundUrl;

    /**
     * Crea una nueva instancia del componente.
     */
    public function __construct($title, $description = null, $backgroundUrl = null)
    {
        // 2. Asignar los valores del constructor a las propiedades públicas
        $this->title = $title;
        $this->description = $description;
        $this->backgroundUrl = $backgroundUrl;
    }

    /**
     * Obtiene la vista/contenido que representa el componente.
     */
    public function render()
    {
        return view('components.module-header');
    }
}