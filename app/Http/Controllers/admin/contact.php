<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class contact extends Controller
{
    function listing () {

        //echo '<pre>';
        //print_r($data['result']);
        //die();
        $data['result']=DB::table('contacts')->get();
        return view('admin.contact.list',$data);
    }
}
