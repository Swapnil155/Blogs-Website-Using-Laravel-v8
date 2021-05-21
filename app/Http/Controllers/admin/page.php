<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class page extends Controller
{
    function listing () {

        //echo '<pre>';
        //print_r($data['result']);
        //die();
        $data['result']=DB::table('pages')->get();
        return view('admin.page.list',$data);
    }

    function add_page (Request $request) {
        //echo '<pre>';
        //print_r ($request->input());
        $request->validate([
            'slug'=>'required|unique:pages'
        ]);

        $data=array(
            'name'=>$request->input('name'),
            'slug'=>$request->input('slug'),
            'description'=>$request->input('description'),
            'status'=>1,
            'added_on'=>date('Y-m-d h:i:s')
        );

        DB::table('pages')->insert($data);
        $request->session()->flash('msg','Data Inserted Succefully...');
        return redirect('/admin/page/list');
        
    }

    function delete (Request $request,$id) {

        //echo "delete";
        //echo "$id";
        DB::table('pages')->where('id',$id)->delete();
        $request->session()->flash('msg','Data Delete Succefully...');
        return redirect('/admin/page/list');
    }

    function edit (Request $request,$id) {

        //echo "edit";
        //echo "$id";
        $data['result']=DB::table('pages')->where('id',$id)->get();
        return view('admin.page.edit',$data);
    }

    function update (Request $request,$id) {
        //echo '<pre>';
        //print_r ($request->input());

        $data=array(
            'name'=>$request->input('name'),
            'slug'=>$request->input('slug'),
            'description'=>$request->input('description'),
            'status'=>1,
            'added_on'=>date('Y-m-d h:i:s')
        );
        
        DB::table('pages')->where('id',$id)->update($data);
        $request->session()->flash('msg','Data Update Succefully...');
        return redirect('/admin/page/list');
        
    }

    
    function active (Request $request,$id) {
        //echo '<pre>';
        //print_r ($request->input());

        DB::update('update pages set status = 1 where id = ?', [$id]);
        $request->session()->flash('msg','Post Active Succefully...');
        return redirect('/admin/page/list');
        
    }

    
    function deactive (Request $request,$id) {
        //echo '<pre>';
        //print_r ($request->input());

        DB::update('update pages set status = 0 where id = ?', [$id]);
        $request->session()->flash('msg','Post Deactive Succefully...');
        return redirect('/admin/page/list');
        
    }
}
