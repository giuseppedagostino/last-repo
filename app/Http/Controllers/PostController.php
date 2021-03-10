<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Str;

class PostController extends Controller
{
    // array di validazione
    private $postValidation = [
        'title' => 'required|max:100',
        'subtitle' => 'required|max:200',
        'image' => 'required',
        'author' => 'required|max:80',
        'content' => 'required',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
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
        $data = $request->all();
        // dd($data);

        // effettuo un controllo sui dati inseriti
        $request->validate($this->postValidation);

        $newPost = new Post();
        $data['slug'] = Str::slug($request->title);
        // associo i dati presi dal form alle chiavi del database
        $newPost->title = $data["title"];
        $newPost->slug = $data["slug"];
        $newPost->subtitle = $data["subtitle"];
        $newPost->image = $data["image"];
        $newPost->author = $data["author"];
        $newPost->content = $data["content"];
        // salvo il nuovo articolo
        $postSaveResult = $newPost->save();

        return redirect()->route('posts.index')->with('message', 'Post ' . $newPost->name . ' aggiunto correttamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('posts.show', compact('post'));
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
