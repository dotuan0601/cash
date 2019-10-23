<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


use Carbon\Carbon;

class TVController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $posts= Post::where('category_id',4)->orderBy('created_at', 'desc')->get();

        return view('tv.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if (Auth::user()->cannot('post_write')) {
            abort(403, 'Permission denied.');
        }
        return view('tv.create');
    }
    public function edit($id)
    {


        $post = Post::findOrFail($id);
        $categories = Category::all();

        return view('tv.edit', ['post' => $post, 'categories' => $categories]);
    }
    public function update(Request $request, $id)
    {
        if (Auth::user()->cannot('post_write')) {
            abort(403, 'Permission denied.');
        }
        $format = 'd/m/Y H:i';


        $post = Post::findOrFail($id);


        $post->title = $request->title;
       // $post->description =$this->process_remote_images($request->description);
        $post->description = $request->description;
        $post->summary = $request->summary;
        $post->category_id = 4;
        $post->feather_image = $request->feather_image;
        $post->updated_by = Auth::user()->name;
        $post->priority = $request->priority;
        $post->save();

        return redirect()->route('admin.tv.index');

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $format = 'd/m/Y H:i';
        if (Auth::user()->cannot('post_write')) {
            abort(403, 'Permission denied.');
        }
        $post= new Post();


        $post->title = $request->title;
        //$post->description = $this->process_remote_images($request->description);
        $post->description = $request->description;
        $post->category_id = 4;
        $post->feather_image = $request->feather_image;
        $post->summary = $request->summary;
        $post->created_by = Auth::user()->name;
        $post->priority = $request->priority;
        $post->save();

        return redirect()->route('admin.tv.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if (Auth::user()->cannot('post_write')) {
            abort(403, 'Permission denied.');
        }
        $post = Post::findOrFail($id);

        $post->delete();

        return redirect()->route('admin.tv.index');
    }




}
