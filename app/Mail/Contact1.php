<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact1 extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;
    public function __construct($contact)
    {
          $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return 
        $this->from($this->contact->email)->view('Emails.contact')
        ->with(['contact' => $this->contact]);
    }
    // public function build()
    // {
    //     return $this->view('Emails.contact')->with([
    //                     'contactName' => $this->contact->name,
    //                     'contactEmail' => $this->contact->email,
    //                     'contactSubject' => $this->contact->subject,
    //                     'contactMessage' => $this->contact->message,
                        
    //                 ]);
    // }
}
