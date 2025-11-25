<?php

namespace App\Livewire;

use Livewire\Component;

class GaleriaSlider extends Component
{
    public $showModal = false;
    public $selectedImage = null; 

    public $images = [
        [
            'id' => 1,
            'url' => 'images/home/1.jpg',
            'description' => 'Un vibrante árbol de naranjas bajo el sol.',
        ],
        [
            'id' => 2,
            'url' => 'images/home/2.jpg',
            'description' => 'Vista subacuática con efectos de luz.',
        ],
        [
            'id' => 3,
            'url' => 'images/home/3.jpg',
            'description' => 'Vista impresionante desde un mirador alto.',
        ],
        [
            'id' => 4,
            'url' => 'images/home/4.jpg',
            'description' => 'El icónico One World Trade Center de Nueva York.',
        ],
        [
            'id' => 5,
            'url' => 'images/home/5.jpg',
            'description' => 'Gotas de lluvia en una ventana.',
        ],
        [
            'id' => 6,
            'url' => 'images/home/6.jpg',
            'description' => 'Primer plano de la nariz de un gato.',
        ],
    ];

    
    public function openModal($imageId)
    {
        $this->selectedImage = collect($this->images)->firstWhere('id', $imageId);
        
        if ($this->selectedImage) {
            $this->showModal = true;
        }
    }
    
    public function closeModal()
    {
        $this->showModal = false;
        $this->selectedImage = null; 
    }
    
    public function render()
    {
        
        return view('livewire.galeria-slider', [
            'images' => $this->images,
        ]);
    }
}