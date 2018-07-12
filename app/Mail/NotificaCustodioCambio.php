<?php

namespace App\Mail;

use App\Custodios;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Lang;

class NotificaCustodioCambio extends Mailable
{
    use Queueable, SerializesModels;

    public $custodios;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Custodios $custodios)
    {
        $this->custodios = $custodios;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.NotificaCustodioEmail')->subject(Lang::get('message.notifica_correo'));
    }
}
