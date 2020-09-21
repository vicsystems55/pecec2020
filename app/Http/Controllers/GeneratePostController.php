<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use DB;

use Auth;

class GeneratePostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generate_post()
    {
        $client = new \GuzzleHttp\Client();
        $request = $client->get('http://newsapi.org/v2/top-headlines?country=ng&apiKey=142b1d002c5d4e4aac719268900fb37d');
        $response = $request->getBody()->getContents();

        $response = json_decode($response);
    
        foreach ($response->articles as $article) {
        $post = new Post();
        $post->title = $article->title;
        $post->excerpt = $article->description;
        $post->body = $article->content;
        $post->status = 'active';
        $post->published_date = $article->publishedAt;
        $post->image_url = $article->urlToImage;
        $post->author_id = 1;


      
        $post->save();
      }

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
