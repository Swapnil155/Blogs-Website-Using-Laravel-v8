<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class post extends Controller
{
    function listing () {

        $data['result']=DB::table('posts')->orderByDesc('id')->get();
        //echo '<pre>';
        //print_r($data['result']);
        //die();
        return view('admin.post.list',$data);
    }

    function add_post (Request $request) {
        //echo '<pre>';
        //print_r ($request->input());
        $request->validate([
            'image'=>'required|mimes:png,jpg,jpeg',
            'slug'=>'required|unique:posts'
        ]);

        //$image=$request->file('image')->store('public/post');
        $image=$request->file('image');
        $ext=$image->extension();
        $file=time().'.'.$ext;
        $image->storeAs('/public/post',$file);

        $data=array(
            'title'=>$request->input('title'),
            'slug'=>$request->input('slug'),
            'short_desc'=>$request->input('short_desc'),
            'long_desc'=>$request->input('long_desc'),
            'image'=>$file,
            'post_date'=>$request->input('post_date'),
            'status'=>1,
            'added_on'=>date('Y-m-d h:i:s')
        );

        DB::table('posts')->insert($data);
        $request->session()->flash('msg','Data Inserted Succefully...');
        return redirect('/admin/post/list');
        
    }

    function delete (Request $request,$id) {

        //echo "delete";
        //echo "$id";
        DB::table('posts')->where('id',$id)->delete();
        $request->session()->flash('msg','Data Delete Succefully...');
        return redirect('/admin/post/list');
    }

    function edit (Request $request,$id) {

        //echo "edit";
        //echo "$id";
        $data['result']=DB::table('posts')->where('id',$id)->get();
        return view('admin.post.edit',$data);
    }

    function update (Request $request,$id) {
        //echo '<pre>';
        //print_r ($request->input());
        $request->validate([
            'image'=>'mimes:png,jpg,jpeg',
        ]);

        $data=array(
            'title'=>$request->input('title'),
            'slug'=>$request->input('slug'),
            'short_desc'=>$request->input('short_desc'),
            'long_desc'=>$request->input('long_desc'),
            'post_date'=>$request->input('post_date'),
            'status'=>1,
            'added_on'=>date('Y-m-d h:i:s')
        );

        if($request->hasfile('image')){
            //$image=$request->file('image')->store('public/post');
            $image=$request->file('image');
            $ext=$image->extension();
            $file=time().'.'.$ext;
            $image->storeAs('/public/post',$file); 

            $data['image']=$file;
        }
        

        

        DB::table('posts')->where('id',$id)->update($data);
        $request->session()->flash('msg','Data Update Succefully...');
        return redirect('/admin/post/list');
        
    }

    function active (Request $request,$id) {
        //echo '<pre>';
        //print_r ($request->input());

        DB::update('update posts set status = 1 where id = ?', [$id]);
        $request->session()->flash('msg','Post Active Succefully...');
        return redirect('/admin/post/list');
        
    }

    
    function deactive (Request $request,$id) {
        //echo '<pre>';
        //print_r ($request->input());

        DB::update('update posts set status = 0 where id = ?', [$id]);
        $request->session()->flash('msg','Post Deactive Succefully...');
        return redirect('/admin/post/list');
        
    }
}
