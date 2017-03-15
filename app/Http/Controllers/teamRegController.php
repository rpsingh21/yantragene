<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class teamRegController extends Controller
{
    public function index(Request $rq){
        session_start();
        $arr=array();
        if(!isset($_SESSION['user'])){
            $arr['error']='Login Frist Then Register Your Team';
            echo json_encode($arr);
            return;
        }
        else{
            // ----------if sesssion pass then take value -------------------------
            $leader = $_SESSION['user'];
            $teamName=filter_var($rq->teamName,FILTER_SANITIZE_STRING);
            $eventId=$rq->eventId;
            //-------------chk teamName is Not exists in Table-------------------
            $cnt=DB::table('participate')
                ->where('teamName','=',$teamName)->count();
            if($cnt){
                $arr['error']='Team name already exists!!';
                echo json_encode($arr);
                return;
            }

            if($this->chk($leader,$eventId)){
                $arr['error']='Team leader already registered for this Event';
                echo json_encode($arr);
                return;
            }
            else{
                //-----------------------create member object -----------------------
                $db=DB::table('event')
                    ->select('teamLimit')
                    ->where('eventId','=',$eventId)->get()->first();
                $teamSize=$db->teamLimit;
                $member =array();
                for($i=2;$i<=$teamSize;$i++){
                    $member[$i-2]='member_'.$i;
                }
                //-----------------checking all user register or not -------------------
                $memberEmail=$rq->all();
                foreach ($member as $m){
                    if(strcmp($memberEmail[$m],"")!=0) {
                        if (!$this->auth($memberEmail[$m])) {
                            $arr['error'] = "This email " . $memberEmail[$m] . " is not registered .Please register your Team members in yantragene first";
                            echo json_encode($arr);
                            return;
                        }
                    }
                }
                //--------------------geting all user Id-----------------------------
                $idArr=array();
                $allMembers = array();
                $allMembers[]=$leader;
                foreach ($member as $m){
                    if(strcmp($memberEmail[$m],"") !=0){
                        $temp = $this->getUserId($memberEmail[$m]);
                        $idArr[] = $temp;
                        $allMembers[] = $temp;
                        if($this->chk($temp,$eventId)){
                            $arr['error']=$memberEmail[$m].' registered for this Event';
                            echo json_encode($arr);
                            return;
                        }
                    }
                }
                //------------------if any email apear twise in input
                if(count($allMembers) != count(array_count_values($allMembers))){
                    $arr['error']="Same user cant register twice for the same event";
                    echo json_encode($arr);
                    return;
                }
                //===================saving all user in databases======================
                //-----------------create team------------
               $gid=DB::table('participate')
                    ->insertGetId([
                        'eventId'=>$eventId,
                        'teamName'=>$teamName,
                        'created_at'=>date("Y-m-d H:i:s"),
                        'updated_at'=>date("Y-m-d H:i:s"),
                    ]);
                //-------------insert leader -----------------
                DB::table('team')
                    ->insert([
                        'teamId'=>$gid,
                        'userId'=>$leader,
                        'created_at'=>date("Y-m-d H:i:s"),
                        'updated_at'=>date("Y-m-d H:i:s"),
                    ]);
                foreach ($idArr as $item){
                    DB::table('team')
                        ->insert([
                            'teamId'=>$gid,
                            'userId'=>$item,
                            'created_at'=>date("Y-m-d H:i:s"),
                            'updated_at'=>date("Y-m-d H:i:s"),
                        ]);
                }
                //====================sanding mail to each member======================
                /*$en=DB::table('event')->select('eventName')->where('eventId','=',$eventId)->get()->first();
                $data=['teamName'=>$teamName,'eventName'=>$en->eventName,'members'=>$memberEmail];*/

                $arr['success']="Successfully Registered";
                echo json_encode($arr);
                return;
            }
        }
    }
    public function chk($userId,$eventId){
        $cnt=DB::table('participate')
            ->join('team','participate.teamId','=','team.teamId')
            ->where('participate.eventId','=',$eventId)
            ->where('team.userId','=',$userId)
            ->count();
        return $cnt;
    }
    public function auth($userEmail){
        $cnt=DB::table('users')
            ->where('status','=','1')
            ->where('email','=',$userEmail)->count();
        return $cnt;
    }
    public function getUserId($userEmail){
        $arr=DB::table('users')
            ->select('id')
            ->where('email','=',$userEmail)->get()->first();
        return $arr->id;
    }

}
