<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CustodioDarClave extends Notification
{
    use Queueable;

    public $custodios;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($custodios)
    {
        $this->custodios = $custodios;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     *
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     *
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage())
                    ->line('La clave de acceso '.$this->custodios->nombre_responsable.' es.')
                    ->action('Clave de Acceso:'.$this->custodios->token, url('/home2/'.$this->custodios->token))
                    ->line('Gracias por usar esta aplicación!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     *
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
