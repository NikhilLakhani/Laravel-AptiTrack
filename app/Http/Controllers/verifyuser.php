<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class verifyuser extends Controller
{
    public function verifyu(Request $req)
    {
        $user=DB::table('users1')->where('user_email',$req->email)->where('user_password',$req->password)->get();
        if(sizeof($user)!=0)
        {
            return view('Home',['user'=>$user]);
        }
        else
        {
            return view('login',['use'=>1]);
        }
    }
    public function verifyu2(Request $req)
    {
        $req->validate([
            'cpassword'=>'same:password',
        ]);
        $user=DB::table('users1')->where('user_email',$req->email)->get();
        if(sizeof($user)!=0)
        {
            return view('sign_up',['use'=>1]);
        }
        else
        {
            $p=DB::table('users1')->insert(
                [
                    'name'=>$req->name,
                    'user_email'=>$req->email,
                    'user_password'=>$req->password
                ]);
                $user=DB::table('users1')->where('user_email',$req->email)->get();
            return view('Home',['user'=>$user]);
        }
        // echo"here0";
    }
    public function pg(Request $req)
    {
        $user=DB::table('users1')->where('user_email',$req->email)->get();
        return view('progress',['ts'=>$user]);
    }
    public function hm(Request $req)
    {
        $user=DB::table('users1')->where('user_email',$req->email)->get();
        return view('Home',['user'=>$user]);
    }
    public function tat(Request $req)
    {
        $user=DB::table('users1')->where('user_email',$req->email)->get();
        $ques=DB::table('ques_type_1')->inRandomOrder()->get();
        return view('test',['user'=>$user,'ques'=>$ques]);
    }
    public function ch(Request $req)
    {
        $p="n";
        $ans="a";
        $score=0;
        for($i=1;$i<=6;$i++)
        {
            if($req->$p==$req->$ans)
            {
                $score++;
            }
            $p=$p."n";
            $ans=$ans."a";
        }
        $user=DB::table('users1')->where('user_email',$req->email)->get();
        foreach($user as $temp)
        {
            $t=$temp->test_scores;
            $b=$temp->ques_type_1;
            $user1=DB::table('users1')->where('user_email',$req->email)->update(['test_scores'=>$t.",".$score,'ques_type_1'=>$b+6]);
        }
        $user=DB::table('users1')->where('user_email',$req->email)->get();
        return view('progress',['ts'=>$user]);
    }
}
