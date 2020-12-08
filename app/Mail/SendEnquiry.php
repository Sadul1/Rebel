<?php

namespace App\Mail;

use Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEnquiry extends Mailable
{
  use Queueable, SerializesModels;
  public $data1;
  /**
  * Create a new message instance.
  *
  * @return void
  */
  public function __construct($data1)
  {
    $this->data1 = $data1;
  }

  /**
  * Build the message.
  *
  * @return $this
  */
  public function build()
  {
    return $this->from('sbesttravels@gmail.com')->subject('Tour Equiry')->view('enquiry')->with('data', $this->data1);
  }
}
