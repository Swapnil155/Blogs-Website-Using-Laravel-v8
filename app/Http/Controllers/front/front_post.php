<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class front_post extends Controller
{
    function home() {
        
        $data['result']=DB::table('posts')->where('status', 1)->orderByDesc('id')->get();
        //echo '<pre>';
        //print_r($data['result']);
        //die();
        //$data['result']=DB::table('posts')->get();
        return view('front.home',$data);

    }

    function Posted(Request $request, $slug) {
        $data['result']=DB::table('posts')->where('slug',$slug)->get();
        //echo '<pre>';
        //print_r($data['result']);
        //die();
        return view('front.post',$data);
    }
    
    function paged(Request $request, $slug) {
        $data['result']=DB::table('pages')->where('slug',$slug)->get();
        //echo '<pre>';
        //print_r($data['result']);
        //die();
        return view('front.page',$data);
    }

    public static function page_menu() {
        $result=DB::table('pages')->where('status',1)->get();
        //echo '<pre>';
        //print_r($data['result']);
        //die();
        return $result;
    }

    function add_msg(Request $request) {
        
        echo '<pre>';
        print_r($request->input());

        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'mobile'=>'required|max:12',
            'message'=>'required'
        ]);

        $data=array(
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'mobile'=>$request->input('mobile'),
            'message'=>$request->input('message'),
            'added_on'=>date('Y-m-d h:i:s')
        );
        DB::table('contacts')->insert($data);
        $request->session()->flash('msg','Message Send... Thank you....');
        return redirect('/contact');
    }

}
