<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\File;


class FileApproved extends Mailable
{
    use Queueable, SerializesModels;


    public $file;
    public $user;
    public $approval;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(File $file )
    {
         $this->file = $file;
         $this->user = $file->user;
         $this->approval = $file->approval();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Your File as been Approved ")->markdown('emails.files.approved');
    }
}
