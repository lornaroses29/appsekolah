<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;

class GradeController extends Controller
{
    public function index()
    {
        $grades=Grade::all();
        return view('grades.index',compact('grades'));
    }
    
    public function create()
    {
        return view('grades/create');
    }
    
    public function store (Request $request)
    {
        $request->validate([
            'grade' => 'required',
            'amount' => 'required',
        ]);
        
        Grade::create($request->all());

        return redirect()->route('grade.index')->with('success', 'Berhaslil menambahkan.');
    }

    public function edit(Grade $grade)
    {
        return view('grades.edit',compact('grade'));
    }

    public function update(Request $request, Grade $grade)
    {
        $request->validate([
            'grade' => 'required',
            'amount' => 'required',
        ]);
        $grade->update($request->all());
        return redirect()->route('grade.index')->with('success','Berhasil mengupdate');
    }
    
    public function destroy(Grade $grade)
    {
        $grade->delete();
    
        return redirect()->route('grade.index')->with('success','Berhasil menghapus');
    }
}