<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class ContactModel extends Model
{
    use HasFactory, Notifiable;
    
    protected $table = "contact";
    
    /**
     * Route notifications for the mail channel.
     * This tells Laravel to send emails to the contact's email address.
     */
    public function routeNotificationForMail($notification)
    {
        return $this->email;
    }
}
