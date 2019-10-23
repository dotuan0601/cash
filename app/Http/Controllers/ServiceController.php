<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (Auth::user()->cannot('service_read')) {
            abort(403, 'Permission denied.');
        }
        $services = Service::all();
        return view('service.index', ['services' => $services]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if (Auth::user()->cannot('service_write')) {
            abort(403, 'Permission denied.');
        }
        return view('service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::user()->cannot('service_write')) {
            abort(403, 'Permission denied.');
        }

        $service = new Service();



        $service->name = $request->name;
        $service->summary = $request->summary;
        $service->feather_image = $request->feather_image;
        $service->icon = $request->icon;
        $service->price = $request->price;
        $service->description = $request->description;
        $service->order = $request->order;

        $service->save();


        return redirect()->route('admin.service.index');
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

        if (Auth::user()->cannot('service_write')) {
            abort(403, 'Permission denied.');
        }
        $service = Service::findOrFail($id);

        return view('service.edit', ['service' => $service]);
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

        if (Auth::user()->cannot('service_write')) {
            abort(403, 'Permission denied.');
        }


        $service = Service::findOrFail($id);

        $service->name = $request->name;
        $service->summary = $request->summary;
        $service->description = $request->description;
        $service->feather_image = $request->feather_image;

        $service->icon = $request->icon;
        $service->price = $request->price;
        $service->order = $request->order;

        $service->save();

        return redirect()->route('admin.service.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if (Auth::user()->cannot('service_write')) {
            abort(403, 'Permission denied.');
        }
        $service = Service::findOrFail($id);

        $service->delete();

        return redirect()->route('admin.service.index');
    }
}
