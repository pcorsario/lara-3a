<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $computers = Computer::all();
        return view('computers.index', compact('computers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cpu= new Computer();
        $cpu->descripcion="XTRATECH PC-03";
        $cpu->nroserie="WEQWEQWEQW";
        $cpu->estado="Regulr";
        $cpu->precio=50.27;
        $accion=$cpu->save();
        return 'Guardado con exito';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
