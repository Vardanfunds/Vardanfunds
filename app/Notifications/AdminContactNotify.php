<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AdminContactNotify extends Notification
{
    use Queueable;
    
    protected $contact;
    
    /**
     * Create a new notification instance.
     */
    public function __construct($contact)
    {
        $this->contact = $contact;
    }

    /**
     * Get the notification's delivery channels.
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('New Contact Form Submission - ' . $this->contact->name)
            ->replyTo($this->contact->email, $this->contact->name) // <--- Adds Reply-To user
            ->greeting('New Enquiry Received!')
            ->line('**Name:** ' . $this->contact->name)
            ->line('**Email:** ' . $this->contact->email)
            ->line('**Phone:** ' . $this->contact->phone)
            ->line('**Fund:** ' . $this->contact->project)
            ->line('**Subject:** ' . $this->contact->subject)
            ->line('**Message:** ' . $this->contact->msg)
            ->line('---')
            ->line('Please follow up with this enquiry.');
    }
}
