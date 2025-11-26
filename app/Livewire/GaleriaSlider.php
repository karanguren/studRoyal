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
            'url' => 'images/galeria/1.jpg',
            'description' => '1',
        ],
        [
            'id' => 2,
            'url' => 'images/galeria/2.jpg',
            'description' => '2',
        ],
        [
            'id' => 3,
            'url' => 'images/galeria/3.jpg',
            'description' => '3',
        ],
        [
            'id' => 4,
            'url' => 'images/galeria/4.jpg',
            'description' => '4',
        ],
        [
            'id' => 5,
            'url' => 'images/galeria/5.jpg',
            'description' => '5',
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