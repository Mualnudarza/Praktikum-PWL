<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contact;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $institution;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'phone' => 'required|min:10',
        'institution' => 'required|min:3',
    ];

    public function submit()
    {
        $validatedData = $this->validate();
        Contact::create($validatedData);
        
        session()->flash('message', 'Contact berhasil ditambahkan.');
        
        $this->reset(['name', 'email', 'phone', 'institution']);
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}