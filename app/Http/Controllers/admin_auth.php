<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class admin_auth extends Controller
{
    function login_submit(Request $request) {
        $username=$request->input('username');
        $password=$request->input('password');
        
        $result=DB::table('users')
            ->where('username',$username)
            ->where('password',$password)
            ->get();
        
            //echo '<pre>';
            //print_r($result);

            if(isset($result[0]->id)){
                if($result[0]->status==1){
                    $request->session()->put('BLOG_User_ID',$result[0]->id);
                    $request->session()->put('BLOG_User_Name',$result[0]->username);
                    return redirect('/admin/post/list');
                }else{
                    $request->session()->flash('msg','Account is deactivated');
                    return redirect('admin/login');
                }
            }else{
                $request->session()->flash('msg','Enter valid Details...');
                return redirect('admin/login');
            }
    }

    function login(Request $request) {
        $id = session('BLOG_User_ID');

        if(!$id == ''){
            return redirect('admin/post/list');
        }else{
            return view('admin/login');
        }


    }
}
