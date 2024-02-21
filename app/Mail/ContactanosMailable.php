<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactanosMailable extends Mailable
{
    use Queueable, SerializesModels;

    //Antes se definia la variable $subject
    //public $subject = "Información de Contacto";
    public $contacto;

    // Create a new message instance.
    public function __construct($contacto)
    { //Este es el contructor del correo donde se le dará forma con las variables enviadas...
        $this->contacto = $contacto;
    }

    // Get the message envelope.
    public function envelope(): Envelope{
        return new Envelope(
            //Ahora sólo hay que cambiar "subject" directamente aqui...
            subject: 'Correo de contacto...',
        );
    }

    // Get the message content definition.
    public function content(): Content
    {   /* Aparentemente en el curso se usaba 
           public function build(){ return $this->view('view.name'); }

           //Pero aqui se usara content()
        */
        //return new Content( view: 'view.name',);
        return new Content( view: 'emails.contactanos',);
    }

    /* Get the attachments for the message.
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array{
        return [];
    }
}
