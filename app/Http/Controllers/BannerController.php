<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (Auth::user()->cannot('banner_read')) {
            abort(403, 'Permission denied.');
        }
        $banners = Banner::all();
        return view('banner.index', ['banners' => $banners]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if (Auth::user()->cannot('banner_write')) {
            abort(403, 'Permission denied.');
        }
        return view('banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::user()->cannot('banner_write')) {
            abort(403, 'Permission denied.');
        }

        $banner = new Banner();

      /*  $banner->translate('vi')->name = $request->name;
        $banner->translate('en')->name = $request->name_en;*/

        $banner->feather_image = $request->feather_image;

        $banner->name = $request->name;
        $banner->summary = $request->summary;
        $banner->link = $request->link;

        $banner->save();


        return redirect()->route('admin.banner.index');
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

        if (Auth::user()->cannot('banner_write')) {
            abort(403, 'Permission denied.');
        }
        $banner = Banner::findOrFail($id);

        return view('banner.edit', ['banner' => $banner]);
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

        if (Auth::user()->cannot('banner_write')) {
            abort(403, 'Permission denied.');
        }


        $banner = Banner::findOrFail($id);
        $banner->feather_image = $request->feather_image;


        $banner->name = $request->name;
        $banner->summary = $request->summary;
        $banner->link = $request->link;


        $banner->save();

        return redirect()->route('admin.banner.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if (Auth::user()->cannot('banner_write')) {
            abort(403, 'Permission denied.');
        }
        $banner = Banner::findOrFail($id);

        $banner->delete();

        return redirect()->route('admin.banner.index');
    }
}
