<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;
use Storage;
use Image;
use App\Mailfile;
use App\Post; 
use Auth;
use App\Mail\SendMail;
use App\Mail\UploadMail;
use App\Rules\Captcha;

class TestController extends Controller
{
    public function email()
    {
        # code...
        // TODO::response Json! Snaptcha! Thank
        return view('white');
    }
    
    public function ajaxTest(Request $request)
    {
        if ($request->isMethod('post')){
                $message = $request->message;
                $from = $request->email;
                $fullname = $request->fullname;
                $recaptcha = $request->recaptcha;

                if ($message && $from && $fullname && $recaptcha) {
                    Mail::send(new SendMail());
                    return response()->json(['msg' => 'Thanks, I will get back to you ASAP']);    
                } else if( $recaptcha === null ){
                    return response()->json(['error' => 'error : Please complete the recaptcha to submit the form.']);
                } else {
                    return response()->json(['error' => 'error : email not sent']);
                }
        }
    

    }
    public function postUpload(Request $request) //route: upload
    {
        if ($request->isMethod('post')){
                    $data = array(
                        'frm'=>$request->email,
                        'sbj'=>$request->subject,
                        'msg'=>$request->message,
                        'fileatt'=>$request->fileatt,
                        'fullname'=>$request->fullname
                    );                  
                    $ms = $request->message;
                    $from = $request->email;
                    $fullname = $request->fullname;
                    $fileattsize = $request->fileattsize;
                    $recaptcha = $request->recaptcha;

                    if ($ms && $from && $fullname && $recaptcha && ($fileattsize <= 2048000000000/*1024x20000*/) ) {
                        Mail::send(new UploadMail());
                        return response()->json(['msg' => 'Thanks, I will get back to you ASAP']);    
                    } else if ($fileattsize > 2048000000000/*1024x20000*/) {
                        return response()->json(['error' => 'error : The file must be less than 200KB']);
                    } else if( $recaptcha === null ){
                        return response()->json(['error' => 'Please complete the recaptcha to submit the form.']);
                    } else {
                        return response()->json(['error' => 'error : email not sent']);
                    }      
            
        }

    }
    public function getUpload(Request $request)
    {
        if ($request->isMethod('get')){

            return view('white');
        }

    }

}
