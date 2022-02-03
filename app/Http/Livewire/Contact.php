<?php

namespace App\Http\Livewire;

use App\Mail\NewContactEmail;
use Illuminate\Support\Facades\Mail;
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

    public function submit()
    {
        $this->validate([
            'subject_a' => 'required|max:225',
            'from'      => 'required|email',
            'name'      => 'required|max:225',
            'body'      => 'required|max:1000',
        ]);

        Mail::to(['info@seataedu.com'])
            ->bcc(['yaramayservices@gmail.com', 'sab_princes@yahoo.com'])
            ->send(new NewContactEmail($this->subject_a, $this->from, $this->name, $this->body));

        $this->subject_a = '';
        $this->from      = '';
        $this->name      = '';
        $this->body      = '';

        session()->flash('message', 'Your message has been sent.');
    }
}
