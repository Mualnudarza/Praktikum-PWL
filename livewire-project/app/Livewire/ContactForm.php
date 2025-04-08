<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contact;

class ContactForm extends Component
{
    public $name, $email, $message;

    public function submit()
    {
        $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'required|max:1000',
        ]);

        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);

        $this->reset();

        session()->flash('message', 'Pesan berhasil dikirim!');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}