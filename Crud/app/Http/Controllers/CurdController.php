<?php

namespace App\Http\Controllers;

use App\Models\Curd;
use Illuminate\Http\Request;

class CurdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("crud.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("crud.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd ($request->all());
        // echo ("store is called");

        $todo = new Curd();
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->is_completed = $request->is_completed ?? 0;
        $todo->save();

        return redirect()->route('crud.index')->with('success', 'Crud created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Curd $curd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Curd $curd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Curd $curd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Curd $curd)
    {
        //
    }
}
