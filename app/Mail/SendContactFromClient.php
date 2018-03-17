<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendContactFromClient extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $name;
    public $email;
    public $mess;
    public $attach;
    public $attach_name;
    public $mimetype;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject,$name,$email,$mess,$attach,$attach_name,$mimetype)
    {
        $this->subject = $subject;
        $this->name=$name;
        $this->attach=$attach;
        $this->email = $email;
        $this->mess=$mess;
        $this->attach_name = $attach_name;
        $this->mimetype = $mimetype;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $mail_obj = $this->from('huylevinh13@gmail.com',"From : ".$this->email. " : " . $this->name)->subject($this->subject)->markdown("mail.mail_contact_client");

        if($this->attach ==null)
            return $mail_obj;
        else
            return $mail_obj->attach($this->attach,[
                    "as"=>$this->attach_name,
                    "mime"=>$this->mimetype
                ]);
    }
}
