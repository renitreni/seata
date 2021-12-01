<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contact extends Component
{
    public $subject_a;
    public $body;
    public $name;
    public $from;

    public function render()
    {
        return view('livewire.contact');
    }
}
