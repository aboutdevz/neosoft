<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Nahid\JsonQ\Jsonq;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $posts = Http::get('https://jsonplaceholder.typicode.com/posts');
        $comment = Http::get('https://jsonplaceholder.typicode.com/comments');
        $dataPost = [
            "post" => $posts->json(),
        ];

        $q = jsonq( json_encode($dataPost) );
        $postRes = $q->from('post')
                ->where('id','=',$id)
                ->get();
        $postRes = $postRes[$id-1];
        $dataComment = [
            'komen' => $comment->json()
        ];
        $r = jsonq( json_encode($dataComment) );
        $comRes = $r->from('komen')
                ->where('postId','=',$id)
                ->get();
        
        return view('posts.index',compact('postRes','comRes'));
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
