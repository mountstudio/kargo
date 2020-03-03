<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Package;
use App\Models\Packed;
use App\Services\Attributable;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PackedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.packeds.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $attributes = Attributable::hasAttribute('Order');
        $orders = Order::all();
        $packages = Package::all();

        return view('admin.packeds.create', [
            'orders' => $orders,
            'packages' => $packages,
            'attributes' => $attributes,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $packed = Packed::create($request->all());
        foreach ($request->request->get('attributes') as $index => $attribute) {
            $packed->attributes()->attach($index, ['value' => $attribute]);
        }

        return redirect()->route('admin.packed.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Packed  $packed
     * @return \Illuminate\Http\Response
     */
    public function show(Packed $packed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Packed  $packed
     * @return \Illuminate\Http\Response
     */
    public function edit(Packed $packed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Packed  $packed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Packed $packed)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Packed  $packed
     * @return \Illuminate\Http\Response
     */
    public function destroy(Packed $packed)
    {
        //
    }

    public function datatableData(Request $request)
    {
        return DataTables::of(Packed::query())
            ->make(true);
    }
}
