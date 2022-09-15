<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputersController extends Controller
{
    public function index()
    {
        return view('computers.index', [
            'computers' => Computer::all()
        ]);
    }

    // --------------------------------------------------------------------------------------------
    public function create()
    {
        return view('computers.create');
    }
    // --------------------------------------------------------------------------------------------
    public function store(Request $request)
    {
        $request -> validate([
            'computer-name'   => 'required',
            'computer-origin' => 'required',
            'computer-price'  => ['required', 'integer'] ,  // OR => 'required | integer',
        ]);

        $computer = new Computer();

        $computer -> name   = strip_tags($request->input('computer-name'));
        $computer -> origin = strip_tags($request->input('computer-origin'));
        $computer -> price  = strip_tags($request->input('computer-price'));

        $computer->save();

        return redirect() -> route('computers.index');
    }
    // --------------------------------------------------------------------------------------------
    public function show($computer)
    {
        return view('computers.show', [
            'computer' => Computer::findOrFail($computer)
        ]);
    }
    // --------------------------------------------------------------------------------------------
    public function edit($computer)
    {
        return view('computers.edit', [
            'computer' => Computer::findOrFail($computer)
        ]);
    }
    // --------------------------------------------------------------------------------------------
    public function update(Request $request, $computer)
    {
        $request -> validate([
            'computer-name'   => 'required',
            'computer-origin' => 'required',
            'computer-price'  => ['required', 'integer'] ,  // OR => 'required | integer',
        ]);

        $update_Data = Computer::findOrFail($computer);

        $update_Data -> name   = strip_tags($request->input('computer-name'));
        $update_Data -> origin = strip_tags($request->input('computer-origin'));
        $update_Data -> price  = strip_tags($request->input('computer-price'));

        $update_Data -> save();

        return redirect()->route("computers.show", $computer);
    }
    // --------------------------------------------------------------------------------------------
    public function destroy($computer)
    {
        $delete_Data = Computer::findOrFail($computer);

        $delete_Data->delete();

        return redirect()->route('computers.index');
    }
}
