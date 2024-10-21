<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WelcomeEmail extends Mailable
{
    use Queueable, SerializesModels;


    protected $data;

    public function __construct($data)
    {

        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact Form',
        );
    }



    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: "mail.mail.send",
        );
    }


    //public function attachments(): array
    //{
       // $attachments = [];

        //if($this->fileName){
           // $attachments= [
               // Attachment::formPath(public_path('/uploads/'.$this->fileName))
            //];
       // }

        //return $attachments;
    //}
}
