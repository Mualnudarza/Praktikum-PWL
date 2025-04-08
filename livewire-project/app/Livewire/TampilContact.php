<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contact;
use Livewire\WithPagination;

class TampilContact extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.tampil-contact', [
            'contacts' => Contact::paginate(10)
        ]);
    }
}
