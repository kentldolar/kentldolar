<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\request;

class UploadMail extends Mailable
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
        $data = array(
            'myemail'=>'kentldolar@gmail.com',
            'msg'=>$request->message,
            'frm'=>$request->email,
            'fulname'=>$request->fullname,
            'sbj'=> $request->subject,
            'sep'=>md5(time()),
            'fileatt'=>$request->fileatt
        );
        if($request->fileatt) {
            return $this->view('mail',$data)->to($data['myemail'])->subject($data['sbj'])->attach($data['fileatt']->getRealPath(), array(
                'as' => 'fileatt.'.$data['fileatt']->getClientOriginalName(), // If you want you can chnage original name to custom name      
                'mime' => $data['fileatt']->getMimeType())
            );
        }else{
            return $this->view('mail',$data)->to($data['myemail'])->subject($data['sbj']);
        }       
    }
}
