<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Giftty extends Mailable
{
   use Queueable, SerializesModels;
   protected $sendData;
   public $subject = '';
   public $content='';
   public function __construct()
   {
      
   }

   public function build()
   {
       return $this->subject("test")
       ->from('ancelindigital@gmail.com','oiuiu')
                   ->view('emails.giftty');
   }
}