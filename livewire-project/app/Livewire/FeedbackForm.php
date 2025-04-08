<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Feedback;

class FeedbackForm extends Component
{
    public $name, $email, $feedback;

    public function submitFeedback()
    {
        $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'feedback' => 'required|max:1000',
        ]);

        Feedback::create([
            'name' => $this->name,
            'email' => $this->email,
            'feedback' => $this->feedback,
        ]);

        $this->reset();

        session()->flash('message', 'Feedback berhasil dikirim!');
    }

    public function render()
    {
        return view('livewire.feedback-form');
    }
}

