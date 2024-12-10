<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class ContactMessage extends Mailable
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('Thank you for your message!')
            ->from('nazeermohsin187@gmail.com', 'Your Name or Company Name') // "From" email
            ->to($this->data['email']) // "To" email
            ->text('emails.contact', [
                'name' => $this->data['name'],
                'message' => $this->data['userMessage']
            ]); // Using plain-text email template
    }
}
