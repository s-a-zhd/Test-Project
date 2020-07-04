<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    //
    public function index (Request $req){
        $list1= DB::table('posts')->orderby('created_at', 'desc')->where('type','video')->get();
        $list2= DB::table('posts')->orderby('created_at', 'desc')->where('type','post')->get();
        
        return view('welcome',compact('list1','list2'));
    }

    public function details($id)
    {
        //
        $list=DB::table('posts')->where('id',$id)->first();
        
        if($list->type=="video"){
            $title=$list->title;
            $link=$list->link;
            $details=$list->details;
        return view('video_details')->with('title', $title)->
        with('link', $link)->with('details',$details);  
        }
        
        else{
            $title=$list->title;
            $link=$list->link;
            $details=$list->details;
            return view('details')->with('title', $title)->
        with('link', $link)->with('details',$details);  
        }
        }
       


}
