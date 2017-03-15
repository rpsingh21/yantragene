<?php

namespace App\Http\Controllers;

use App\Http\Requests\coLoginValidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class coController extends Controller
{
    //----------------------reditect co login -------------------------------------
    public function loginView(){
        return view('coLogin');
    }

    //-----------------------co login-----------------------------------------
    public function coLogin(coLoginValidate $val){
        $arr=DB::table('co')
            ->select('coId','coEventId')
            ->where('coEmail','=',$val->email)
            ->where('coPassword','=',md5($val->password))
            ->get()->first();
        if($arr==null){
            return view('co.coLogin')->with(['mgs'=>'!your password or email is wrong']);
        }
        session(['coId'=>$arr->coId,'coEventId'=>$arr->coEventId]);
        return redirect('co/dashbord');
    }

    //----------------------redirection co dashbord page-----------------------
    public function dashbord(){
        $eid= session('coEventId').'<br>';
        return view('co.coView')->with(['team'=>$this->getTeam($eid)]);
    }

    //-------------------getting all user of team -----------------------------
    public function getTeamUser($team){
        $arr =DB::table('team')
            ->join('users','users.id','=','team.userId')
            ->where('team.teamId','=',$team)
            ->select('team.*','users.*')->get();
        return $arr;
    }
    //----------------------getting all team for a event-------------------------
    public function getTeam($eventId){
        $arr =DB::table('participate')
            ->join('event','participate.eventId','=','event.eventId')
            ->select('event.*','participate.*')
            ->where('event.eventId','=',$eventId)->get();
        return view('admin.team')->with(['team'=>$arr]);
    }
}
