<?php

namespace App\Notifications;

use App\Models\Cake;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class WarnInterestedNotification extends Notification implements ShouldQueue
{
    use Queueable;

    private $cake;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Cake $cake)
    {
        $this->cake = $cake;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('A sua espera acabou')
                    ->line($this->cake->name . " acabou de chegar em nosso estoque temo hoje " . $this->cake->amount . " bolos não perca tempo!")
                    ->action('Compre o seu '.$this->cake->name.'!', url('/'))
                    ->line('Obrigado pela preferência!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
