<?php

namespace App\Http\Controllers;

use App\Salon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class SalonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (Auth::user()->cannot('salon_read')) {
            abort(403, 'Permission denied.');
        }
        $salons = Salon::all();
        return view('salon.index', ['salons' => $salons]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if (Auth::user()->cannot('salon_write')) {
            abort(403, 'Permission denied.');
        }
        return view('salon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::user()->cannot('salon_write')) {
            abort(403, 'Permission denied.');
        }

        $salon = new Salon();

      /*  $salon->translate('vi')->name = $request->name;
        $salon->translate('en')->name = $request->name_en;*/


        $salon->name = $request->name;
        $salon->summary = $request->summary;
        $salon->location = $request->location;
        $salon->max_slot = $request->max_slot;
        $salon->phone = $request->phone;

        $salon->save();


        return redirect()->route('admin.salon.index');
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

        if (Auth::user()->cannot('salon_write')) {
            abort(403, 'Permission denied.');
        }
        $salon = Salon::findOrFail($id);

        return view('salon.edit', ['salon' => $salon]);
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

        if (Auth::user()->cannot('salon_write')) {
            abort(403, 'Permission denied.');
        }


        $salon = Salon::findOrFail($id);
        $old_slot = $salon->max_slot;
        $salon->name = $request->name;
        $salon->summary = $request->summary;
        $salon->location = $request->location;
        $salon->max_slot = $request->max_slot;
        $salon->phone = $request->phone;


        $salon->save();
        if ($old_slot!= $request->max_slot) {
            //TODO:update report
            DB::update('update reports set status = 1 where count < ?', [$request->max_slot]);
            DB::update('update reports set status = 0 where count >= ?', [$request->max_slot]);

        }
        return redirect()->route('admin.salon.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if (Auth::user()->cannot('salon_write')) {
            abort(403, 'Permission denied.');
        }
        $salon = Salon::findOrFail($id);

        $salon->delete();

        return redirect()->route('admin.salon.index');
    }
}
