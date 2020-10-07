<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\request;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {

        $myemail = 'kentldolar@gmail.com';
        $seperator = md5(time());
        $subject = $request->subject;
        
        return $this->view('mail',['msg'=>$request->message,'frm'=>$request->email,'fulname'=>$request->fullname,'sbj'=> $subject,'sep'=>$seperator])->to($myemail)->subject($subject);
    }
}
