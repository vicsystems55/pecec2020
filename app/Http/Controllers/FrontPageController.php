<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\PostInCateory;

use Carbon;

use App\Trending;

use DB;



class FrontPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = DB::table('posts')->where('status', 'active')->get();

       
        return view('blog.index',[
            'posts' => $posts
        ]);
    }

    public function single($id)
    {
        $post = DB::table('posts')->where('status', 'active')->where('id', $id)->first();
        $posts = Post::with('user')->where('status', 'active')->get();
        $posts2 = Post::find(1)->user;

     
        return view('blog.single_post',[
            'single_post' => $post,
            'posts' => $posts
        ]);
    }

    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
