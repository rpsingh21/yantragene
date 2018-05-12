<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailController extends Controller
{
    public static function basic_mail($data,$view,$to,$toname,$sub,$from ,$fromname,$redi){
        Mail::send($view, $data, function($message)use($from,$to,$toname,$sub,$from ,$fromname) {
            $message->to($to, $toname)
                    ->subject($sub);
            $message->from($from,$fromname);
        });
        // echo "Basic Email Sent. Check your inbox.";
    }
    public static function multi_mail($data,$view,$emails,$sub,$from){
        Mail::send($view,$data, function($message) use ($emails,$sub,$from)
        {
            $message->to($emails)->subject($sub);
            $message->from($from);
        });
    }
    public function mail(){
        $emails=['rohitprakashsingh21@gmail.com','prakashsinghrohit0@gmail.com','prakashsinghrohit5@gmail.com'];
        $view ='verification';
        $data=['otp'=>'only for testing'];
        $sub='testig';
        $from='yantra2k17@gmail.com';
        $this->multi_mail($data,$view,$emails,$sub,$from);
    }
}
