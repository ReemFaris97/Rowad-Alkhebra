<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReplyContactus extends Mailable
{
    use Queueable, SerializesModels;

    public $alert,$email,$logo;
      /**
       * Create a new message instance.
       *
       * @return void
       */
      public function __construct($email,$alert,$logo)
      {
          $this->email = $email;
          $this->alert = $alert;
          $this->logo = $logo;
      }

      /**
       * Build the message.
       *
       * @return $this
       */
      public function build()
      {
          return $this->view('mails.reply_contact');
      }
}
