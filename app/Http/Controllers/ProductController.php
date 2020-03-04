<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


use Carbon\Carbon;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->get();
        $categories = Category::all();
        $arrCates =  array();
        foreach ($categories as $cate){
            $arrCates[$cate->id] = $cate->path;
        }
        return view('product.index', ['products' => $products,'arrCates'=>$arrCates]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('product.create', ['categories' => $categories]);
    }
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();

        return view('product.edit', ['product' => $product, 'categories' => $categories]);
    }
    public function update(Request $request, $id)
    {
        $format = 'd/m/Y H:i';


        $product = Product::findOrFail($id);


        $product->name = $request->name;
        //$post->description = $this->process_remote_images($request->description);
        $product->content = $request->description;
        $product->description = $request->description;
        $product->url = '';
        $product->category_id = $request->category_id;
        $product->feather_image = $request->feather_image;
        $product->sort_description = $request->sort_description;
        $product->show_homepage = $request->show_homepage === 'on' ? 1 : 0;
        $product->position = $request->position;
        $product->save();

        return redirect()->route('admin.product.index');

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
        $product = new Product();


        $product->name = $request->name;
        //$post->description = $this->process_remote_images($request->description);
        $product->content = $request->description;
        $product->description = $request->description;
        $product->url = '';
        $product->category_id = $request->category_id;
        $product->feather_image = $request->feather_image;
        $product->sort_description = $request->sort_description;
        $product->show_homepage = $request->show_homepage === 'on' ? 1 : 0;
        $product->position = $request->position;
        $product->save();

        return redirect()->route('admin.product.index');
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

        return redirect()->route('admin.post.index');
    }




}
