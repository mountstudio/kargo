<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.roles.index');
    }

    public function datatableData(Request $request)
    {
        return DataTables::of(Role::query())
            ->editColumn('name', function ($model) {
                return $model->name . ' <a href="' . route('admin.role.show', $model) . '"><i class="far fa-eye"></i></a>';
            })
            ->rawColumns(['name'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role = Role::create($request->all());

        return redirect()->route('admin.role.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Role $role
     * @return void
     */
    public function show(Role $role)
    {
        $permissions = Permission::all();

        return view('admin.roles.show', [
            'role' => $role,
            'permissions' => $permissions,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Role $role
     * @return void
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Role $role
     * @return void
     */
    public function update(Request $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Role $role
     * @return void
     */
    public function destroy(Role $role)
    {
        //
    }

    public function assignPermissions(Request $request, Role $role)
    {
        $role->syncPermissions($request->permissions);

        return redirect()->route('admin.role.index');
    }
}
