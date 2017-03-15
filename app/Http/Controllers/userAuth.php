<?php

namespace App\Http\Controllers;

use App\Http\Requests\teamValidator;
use Illuminate\Http\Request;
use App\Http\Requests\regValidater;
use App\Http\Requests\loginValidater;
use DB;

class userAuth extends Controller
{
    public function index(){
        echo "rohit";
    }

    //===============================testing of email sending funtion=================
    public function mail(){
        $data=array('mgs'=>'hello');
        $view='verification';
        $from='yantra@gmail.com';
        $fromname='roiht';
        $sub='registration';
        $to='rohitprakashsingh21@gmail.com';
        $toname='rohit@12';
        $redi='';
        mailController::basic_mail($data,$view,$to,$toname,$sub,$from ,$fromname,$redi);

    }

    //============================registration Controller==============================
    public function reg(regValidater $val){
        $otp=userAuth::generateRandomString(6);
        $bol=DB::table('otps')->insert([
            'email'=>$val->email,
            'otp'=>$otp,
        ]);

        $bol=DB::table('users')->insert([
            'name'=>$val->name,
            'email'=>$val->email,
            'password'=>md5($val->password),
            'phone'=>$val->phone,
            'college'=>$val->college,
            'status'=>'0',
            'created_at'=>date("Y-m-d H:i:s"),
            'updated_at'=>date("Y-m-d H:i:s"),
        ]);

        session()->put('varify',$val->email);

        //-------------------------------sanding mai------------------------------
        $data=array('mgs'=>'hello','otp'=>$otp);
        $view='verification';
        $from='yantra2k17@gmail.com';
        $fromname='Admin yantragene 2k17';
        $sub='registration';
        $to=$val->email;
        $toname=$val->name;
        $redi='';
        mailController::basic_mail($data,$view,$to,$toname,$sub,$from ,$fromname,$redi);

        return redirect('reg/verify');
    }

    //=========================Varification code verify here===========================
    public function otpVerify(Request $rq){
        $em=session('varify');
        $arr=DB::table('otps')
            ->select('id')
            ->where('email','=',$em)
            ->where('otp','=',$rq->otp)->get()->first();
        if($arr==null){
            return redirect('/reg/verify/otp');
        }
        else{
            $rq->session()->forget('varify');
            DB::table('otps')
                ->where('email','=',$em)
                ->delete();
            DB::table('users')
                ->where('email','=',$em)
                ->update(['status'=>'1']);
            return redirect('/');
        }
    }

    //==================================login controller==============================
    public function login(loginValidater $val){
        $arr=DB::table('users')
            ->select('id')
            ->where('email','=',$val->email)
            ->where('password','=',md5($val->password))->get()->first();
       if($arr == null){
            return view('loginReg')->with(['lmgs'=>'!! Your email or password is Wrong']);
        }
        else{
            $arr=DB::table('users')
                ->select('id')
                ->where('email','=',$val->email)
                ->where('status','=','1')
                ->where('password','=',md5($val->password))->get()->first();
            if($arr == null){
                session()->put('varify',$val->email);
                return view('otp')->with(['mgs'=>'very First']);
            }
            $_SESSION['user']=$arr->id;
            session(['user'=>$arr->id]);
            return redirect('/');
        }
    }
    //=============================user Logout comtroller ===========================
    public function logout(){
        session_unset();
        session()->forget('user');
        session_destroy();
        return redirect('/');
    }
    //===========================random String for otp=============================
    public static function generateRandomString($length) {
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghij9876543210klmnopqrstuvwxyz0123456789ABCDEFGHIJ9876543210KLMNOPQRSTUVWXYZ0123456789', ceil($length/strlen($x)))),1,$length);
    }

    //==========================profile controller ================================
    public function profile(){
        $userId=$_SESSION['user'];
        $user=DB::table('users')
            ->select(['name','email'])
            ->where('id','=',$userId)->get()->first();
        $event=DB::table('participate')
            ->join('team','team.teamId','=','participate.teamId')
            ->join('event','event.eventId','=','participate.eventId')
            ->select(['teamName'=>'participate.teamName','eventId'=>'participate.eventId','eventName'=>'event.eventName',])
            ->where('team.userId','=',$userId)->get();
        return view('userView.profile')->with([
            'userName'=>$user->name,
            'userEmail'=>$user->email,
            'data'=>$event,
        ]);
    }
}
