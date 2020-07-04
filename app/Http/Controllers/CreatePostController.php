<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class CreatePostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $list1= DB::table('posts')->orderby('created_at', 'desc')->where('type','video')->get();
        $list2= DB::table('posts')->orderby('created_at', 'desc')->where('type','post')->get();
        
        return view('welcome',compact('list1','list2'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title'=>'required|unique:posts',
            'link'=>'required',
            'type'=>'required',
            'section'=>'required',
            'details'=>'required',
        ]);
        $url= $request->get('link');
        $new_url=str_replace("watch?v=","embed/",$url);
        $post = new Post([
            'title' => $request->get('title'),
            'link' => $new_url,
            'type' => $request->get('type'),
            'section' => $request->get('section'),
            'details' => $request->get('details'),
            
        ]);
        $post->save();
        print_r($post);
        return redirect('create')->with('success', 'Post saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
       
        
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
