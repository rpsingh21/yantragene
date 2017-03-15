<?php

namespace App\Http\Controllers;

use App\Http\Requests\adminRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    //-----------------------------------------index code for testing---------------
    public function index(Request $req){
        dd($req->session()->all());
    }
    public function login(adminRequest $val){
        //---first checking google caPtcha is wrok or not then forword request-----
        $secret='6Lf2NRQUAAAAAHQwkYz7qECwCJSdCYnHDzgtU0Id';
        $ip=$_SERVER['REMOTE_ADDR'];
        $captcha=$val->input('g-recaptcha-response');
        $varify=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
        $ans=json_decode($varify,true);
        if(!$ans['success']){
            return back();
        }
        // ------------------Testing of password and username ---------------------
        $arr=DB::table('admin')->select('id')
            ->where('adminEmail','=',$val->email)
            ->where('adminPassword','=',$val->password)
            ->get()->first();
        if($arr==null){
            return view('admin.adminLogin')->with(['mgs'=>'! Your password or email is worng']);
        }
        else{
            session(['admin'=> $arr->id]);
            return redirect('/admin/dashbord');
        }
    }

    // ------------------ admin logout section -------------------------------------
    public function adminLogout(Request $req){
        $req->session()->forget('admin');
        return redirect('/admin');
    }
    //------------------------ dashbord controller-------------------------
    public function adminDashbord(){
        $reg=DB::table('users')
            ->where('status','=','1')
            ->count();
        $nver=DB::table('users')
            ->where('status','=','0')
            ->count();
        $event=DB::table('event')
            ->count();
        $team=DB::table('participate')
            ->count();
        $co=DB::table('co')->count();
        return view('admin.dashbord')
            ->with([
                'reg'=>$reg,
                'nver'=>$nver,
                'event'=>$event,
                'team'=>$team,
                'co'=>$co,
            ]);
    }
    // --------admin show all user which is resitred and  not resisred -------------
    public function allUser(){
        $arr = DB::table('users')
            ->select('id','name','email','phone','college','created_at')
            ->where('status','=','1')
            ->get();
        return view('admin.alluser')->with(['user'=>$arr]);
    }
    //---------------show not verify user------------------------------------------
    public function notVerifyUser(){
        $arr = DB::table('users')
            ->select('id','name','email','phone','college','created_at')
            ->where('status','=','0')
            ->get();
        return view('admin.alluser')->with(['user'=>$arr]);
    }
    //-------------------------show total event--------------------------------------
    public function totalEvent(){
        $arr=DB::table('event')->select('id');
    }

    //-------------join of team table and users table commen of teamId ------------
    public static function join3($team){
        $arr =DB::table('team')
            ->join('users','users.id','=','team.userId')
            ->where('team.teamId','=',$team)
            ->select('team.*','users.*')->get();
        return $arr;
    }

    //---------------table for show all team and its members ----------------------
    public function teamTable(){
        $arr =DB::table('participate')
            ->join('event','participate.eventId','=','event.eventId')
            ->select('event.*','participate.*')->get();
        return view('admin.team')->with(['team'=>$arr]);
    }
    // ------------------taking all event data from table-------------------------
     public function getEvent(){
        $arr=DB::table('event')->select('eventId','eventName')->get();
        return $arr;
     }
     //--------------------redirect request on create view page -------------------
    public function goCreateCo(){
         return view('admin.createCo')->with(['event'=>$this->getEvent(),]);
    }
    //-------------------------section for new co-leader --------------------------
    public function createCo(Request $req){
        $password=userAuth::generateRandomString(8);
        $arr=DB::table('co')->insert([
            'coName'=>$req->name,
            'coEmail'=>$req->email,
            'coEventId'=>$req->event,
            'coPassword'=>md5($password),
            'coPhone'=>$req->phone,
            'created_at'=>date("Y-m-d H:i:s"),
            'updated_at'=>date("Y-m-d H:i:s"),
        ]);
        $data=array('mgs'=>'hello','otp'=>$password);
        $view='verification';
        $from='yantra2k17@gmail.com';
        $fromname='Admin yantragene 2k17';
        $sub='co registration';
        $to=$req->email;
        $toname=$req->name;
        $redi='';
        mailController::basic_mail($data,$view,$to,$toname,$sub,$from ,$fromname,$redi);
        return('co');
    }


    //-----------------------------------------------------------------------------
    public function teamView(){
        $arr = DB::table('participate')->select()
            ->get();
        return view('admin.team')->with(['team'=>$arr,]);
    }
    public static function userId($teamId){
        $arr=DB::table('team')
            ->select('userId')
            ->where('teamId','=',$teamId)
            ->get();
        return $arr;
    }
    public static function usreData($userId){
        $arr=DB::table('users')
            ->select()
            ->where('id','=',$userId)
            ->get();
        return $arr;
    }
    public static  function noMember ($eventId){
        $count =DB::table('event')->select('teamLimit')
            ->where('eventId','=',$eventId)->get();
        return $count->teamLimit;
    }
    public function join(){
        DB::enableQueryLog();
        $arr =DB::table('participate')
            ->join('team','participate.teamId','=','team.teamId')
            ->join('users','team.userId','=','users.id')
            ->select('users.*','participate.*')->get();
        dd($arr);
    }
    public function join2(){
        DB::enableQueryLog();
        $arr =DB::table('participate')
            ->join('event','participate.eventId','=','event.eventId')
            ->select('event.*','participate.*')->get();
        dd($arr);
    }

}
