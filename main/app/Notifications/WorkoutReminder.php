<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class WorkoutReminder extends Notification
{
    use Queueable;

    public function __construct()
    {
        //
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('This is a reminder for your upcoming workout session.')
                    ->action('View Workouts', url('/workouts'))
                    ->line('Thank you for using FitLife!');
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
