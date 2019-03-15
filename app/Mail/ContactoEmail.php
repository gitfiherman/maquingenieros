<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactoEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $dados;
    
    public function __construct($dados)
    {
        $this->dados=$dados;
    }
    
    public function build()
    {
        return $this->from($this->dados->email,'Maquingenieros')
                    ->subject("Datos recibidos")
                    ->view('emails.contacto_email');
    }
}
