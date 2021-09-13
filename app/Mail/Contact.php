<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    private $email;
    private $title;
    private $body;

    public function __construct($inputs)
    {
        $this->email = $inputs['email'];
        $this->title = $inputs['title'];
        $this->body = $inputs['body'];
    }

    public function build()
    {
        return $this
            ->from('yu.sato.weserve@gmail.com')
            ->subject('自動送信メール')
            ->view('user.contact.mail')
            ->with([
                'email' => $this->email,
                'title' => $this->title,
                'body' => $this->body,
            ]);
    }
}
