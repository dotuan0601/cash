<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Province;
use App\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
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
        $customers = Customer::all();
        return view('customer.index', ['customers' => $customers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if (Auth::user()->cannot('customer_write')) {
            abort(403, 'Permission denied.');
        }

        $provinces = Province::all();

        return view('customer.create', ['provinces' => $provinces]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::user()->cannot('customer_write')) {
            abort(403, 'Permission denied.');
        }

        $avatar_imgs = [];
        if($request->hasfile('avatar'))
        {
            foreach($request->file('avatar') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/photos/customers/', $name);
                $avatar_imgs[] = $name;
            }
        }

        $identity_imgs = [];
        if($request->hasfile('identity'))
        {
            foreach($request->file('identity') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/photos/customers/', $name);
                $identity_imgs[] = $name;
            }
        }

        $customer = new Customer();
        $customer->name = $request->name;
        $customer->nickname = '';
        $customer->feature_image = implode(';', $avatar_imgs);
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        $customer->identity = implode(';', $identity_imgs);

        if ($request->province) {
            $customer->province = $request->province;
        }

        if ($request->district) {
            $customer->district = $request->district;
        }

        $customer->save();


        return redirect()->route('admin.customer.index');
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

        if (Auth::user()->cannot('customer_write')) {
            abort(403, 'Permission denied.');
        }
        $customer = Customer::findOrFail($id);
        $provinces = Province::all();

        return view('customer.edit', ['customer' => $customer, 'provinces' => $provinces]);
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

        if (Auth::user()->cannot('customer_write')) {
            abort(403, 'Permission denied.');
        }

        $avatar_imgs = [];
        if($request->hasfile('avatar'))
        {
            foreach($request->file('avatar') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/photos/customers/', $name);
                $avatar_imgs[] = $name;
            }
        }

        $identity_imgs = [];
        if($request->hasfile('identity'))
        {
            foreach($request->file('identity') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/photos/customers/', $name);
                $identity_imgs[] = $name;
            }
        }

        $customer = Customer::findOrFail($id);

        $customer->name = $request->name;
        if (count($avatar_imgs) > 0) {
            $customer->feature_image = implode(';', $avatar_imgs);
        }
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        if (count($identity_imgs) > 0) {
            $customer->identity = implode(';', $identity_imgs);
        }

        if ($request->province) {
            $customer->province = $request->province;
        }

        if ($request->district) {
            $customer->district = $request->district;
        }

        $customer->save();

        return redirect()->route('admin.customer.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if (Auth::user()->cannot('customer_write')) {
            abort(403, 'Permission denied.');
        }
        $customer = Customer::findOrFail($id);

        $customer->delete();

        return redirect()->route('admin.customer.index');
    }
}
