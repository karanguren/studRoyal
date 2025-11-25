<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log; 
use App\Mail\ContactFormMail;

class ContactForm extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';
    public $subject = '';
    public $message = '';

    public $successMessage = '';

    protected $rules = [
        'name' => 'required|min:3|max:100',
        'email' => 'required|email|max:100',
        'phone' => 'nullable|max:20',
        'subject' => 'required|min:5|max:150',
        'message' => 'required|min:10',
    ];

    public function submitForm()
    {
        $this->validate();

        try {
            Mail::to('katherinearanguren12@gmail.com')->send(new ContactFormMail([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'subject' => $this->subject,
                'message' => $this->message,
            ]));
            
            $this->successMessage = '¡Gracias! Recibimos tu solicitud y te responderemos pronto.';
            $this->reset(['name', 'email', 'phone', 'subject', 'message']);
            $this->dispatch('form-submitted');

        } catch (\Exception $e) {
            $this->successMessage = '⚠️ ¡Error! No pudimos enviar tu mensaje. Por favor, revisa tus datos o inténtalo más tarde.';
            
            Log::error("Error de envío de correo en ContactForm: " . $e->getMessage()); 
        }
        
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}