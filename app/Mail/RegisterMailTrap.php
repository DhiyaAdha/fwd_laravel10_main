<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegisterMailTrap extends Mailable
{
    use Queueable, SerializesModels;

    // Logic untuk mengkonstruksi email

    public function build()
    {
        return $this->from('adiadiadha@gmail.com') // Mengatur alamat email pengirim
            ->view('emails.example'); // Menggunakan template emails/example.blade.php
    }
}
