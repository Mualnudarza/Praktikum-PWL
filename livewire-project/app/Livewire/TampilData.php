<?php

namespace App\Livewire;

use Livewire\Component;

class TampilData extends Component
{
    public function render()
    {
        $feedback = \App\Models\Feedback::latest()->paginate(10);
        return view('livewire.tampil-data', compact('feedback'));
    }
}
