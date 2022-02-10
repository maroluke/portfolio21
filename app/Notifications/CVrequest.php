<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use NotificationChannels\Telegram\TelegramMessage;
use Illuminate\Notifications\Notification;

class CVrequest extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['telegram'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toTelegram(Request $request)
    {
        // $url = url('/invoice/' . $this->invoice->id);
        $userId = 1136465224;

        return TelegramMessage::create()
            // Markdown supported.
            ->content("Hello: " . $request->get('email'));

            // // (Optional) Blade template for the content.
            // // ->view('notification', ['url' => $url])

            // // (Optional) Inline Buttons
            // ->button('View Invoice', $url)
            // ->button('Download Invoice', $url)
            // // (Optional) Inline Button with callback. You can handle callback in your bot instance
            // ->buttonWithCallback('Confirm', 'confirm_invoice ' . $this->invoice->id);
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
