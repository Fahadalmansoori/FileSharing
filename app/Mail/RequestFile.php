<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;


class RequestFile extends Mailable
{
    use Queueable, SerializesModels;

    public $file;
    public $user;
    public $requester;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($file,$requester)
    {
        $this->file = $file;
        $this->requester= $requester;
        $this->user = $file->user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Your link to download assignment")->markdown('emails.RequestFile');
    }
}
