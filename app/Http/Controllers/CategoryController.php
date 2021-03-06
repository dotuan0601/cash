<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (Auth::user()->cannot('category_read')) {
            abort(403, 'Permission denied.');
        }
        $categories = [];
        $roots = Category::where('parent_id', null)->get();
        if (sizeof($roots) > 0) {
            foreach ($roots as $root) {
                $categories[] = $root;
                $children = $this->getChildren($root);
                if (count($children) > 0) {
                    foreach ($children as $child) {
                        $categories[] = $child;
                    }
                }
            }
        }

        return view('cat_tree.index', ['categories' => $categories]);
    }

    private function getChildren($parent)
    {
        $res = [];
        $cats = Category::where('parent_id', $parent['id'])->get();
        if (sizeof($cats) > 0) {
            foreach($cats as $cat) {
                $res[] = $cat;
                $grandchildren = $this->getChildren($cat);
                if (count($grandchildren) > 0) {
                    foreach ($grandchildren as $grand) {
                        $res[] = $grand;
                    }
                }
            }
        }

        return $res;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if (Auth::user()->cannot('category_write')) {
            abort(403, 'Permission denied.');
        }
        $categories = Category::where('level', '<', 2)
            ->get();
        return view('category.create', ['parents' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::user()->cannot('category_write')) {
            abort(403, 'Permission denied.');
        }
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        $category = new Category();

        if ($request->parent_id > 0) {
            $category->parent_id = $request->parent_id;
            $parentCat = Category::where('id', $request->parent_id)->first();
            $category->level = $parentCat['level'] + 1;
        }
        $category->name = $request->name;


        $category->save();

        return redirect()->route('admin.category.index');
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
    public function edit($id)
    {

        if (Auth::user()->cannot('category_write')) {
            abort(403, 'Permission denied.');
        }
        $category = Category::findOrFail($id);
        $categories = Category::where('level', '<', 2)
            ->where('id', '!=', $id)
            ->get();

        return view('category.edit', ['category' => $category, 'parents' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        if (Auth::user()->cannot('category_write')) {
            abort(403, 'Permission denied.');
        }
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        $category = Category::findOrFail($id);

        if ($request->parent_id > 0) {
            $category->parent_id = $request->parent_id;
            $parentCat = Category::where('id', $request->parent_id)->first();
            $category->level = $parentCat['level'] + 1;
        } else {
            $category->parent_id = null;
            $category->level = 0;
        }
        $category->name = $request->name;

        $category->save();

        return redirect()->route('admin.category.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if (Auth::user()->cannot('category_write')) {
            abort(403, 'Permission denied.');
        }
        $category = Category::findOrFail($id);

        $category->delete();

        return redirect()->route('admin.category.index');
    }
}
