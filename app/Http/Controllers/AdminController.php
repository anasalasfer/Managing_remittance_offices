<?php

namespace App\Http\Controllers;

use App\Models\Office;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // public function index()
    // {
    //     $offices = Office::all();
    //     return view('admin.index', ['offices' => $offices]);
    // }
    public function index()
{
    $offices = Office::all();
   // return response()->json(['offices' => $offices]);

    return view('admin.index', ['offices' => $offices]);
}
    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'balance' => 'required|integer',
            'address' => 'required|string',
            'email' => 'required|email|unique:offices',
            'password' => 'required|string',
        ]);

        Office::create($validatedData);

        return redirect()->route('admin.index')->with('success', 'تم إضافة المكتب بنجاح.');
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
    public function edit($id)
    {
        $office = Office::findOrFail($id);
        return view('admin.edit', compact('office'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'balance' => 'required',
            'address' => 'required|string',
            'email' => 'required|email|unique:offices,email,'.$id, // تجنب الفحص الفوري للبريد الإلكتروني للنفس المكتب
            'password' => 'required|string',
        ]);

        $office = Office::findOrFail($id);
        $office->update($validatedData);

        return redirect()->route('admin.index')->with('success', 'تم تحديث بيانات المكتب بنجاح.');
    }
    public function destroy($id)
    {
        $office = Office::findOrFail($id);
        $office->delete();

        return redirect()->route('admin.index')->with('success', 'تم حذف المكتب بنجاح.');
    }
    

}