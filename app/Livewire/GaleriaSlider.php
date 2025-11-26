<?php

namespace App\Livewire;

use Livewire\Component;

class GaleriaSlider extends Component
{
    public $showModal = false;
    public $selectedImage = null; 
    public $images = []; 

    public function mount(array $images = [])
    {
        $this->images = $images;
    }
    
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
    // 
    public function render()
    {
        return view('livewire.galeria-slider');
    }
}