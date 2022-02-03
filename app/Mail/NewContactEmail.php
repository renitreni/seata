<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewContactEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject_a;
    public $from_send;
    public $name;
    public $body;

    /**
     * Create a new message instance.
     *
     * @param $subject_a
     * @param $from
     * @param $name
     * @param $body
     */
    public function __construct($subject_a, $from, $name, $body)
    {
        $this->subject_a = $subject_a;
        $this->from_send = $from;
        $this->name      = $name;
        $this->body      = $body;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->from_send)
            ->subject('SEATAEDU.COM - '.$this->subject_a)
            ->html(
                "<p>Sender Name: $this->name</p>
                <p>Message: $this->body</p>
                <p><br></p>"
            );
    }
}
