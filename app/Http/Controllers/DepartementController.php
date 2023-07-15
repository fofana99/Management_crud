<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DepartementController extends Controller
{
    //
    public function index()
    {
        $departements = Departement::all();

        return view('management.departmnets.index', compact('departements'));
    }
    public function create()
    {
        return view('management.departmnets.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'director_id' => ['required']


        ]);
        Departement::create([
            'user_id' => 1,
            'director_id' => $request->director_id,
            'name' => $request->name,



        ]);

        Session::flash('success-message', 'Departement created successfully!');

        return redirect()->route('departmnetsIndex');
    }
    public function edit($id)
    {
        $departement = Departement::find($id);

        return view('management.departmnets.edit', compact('departement'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required'],
            'director_id' => ['required']


        ]);
        Session::flash('success-message', 'Departement was update!');

        Departement::where('id', $id)->update([
            'director_id' => $request->director_id,
            'name' => $request->name,

        ]);
        return  redirect()->route('departmnetsIndex');
    }
    public function delete($id)
    {
        Departement::where('id', $id)->delete();
        Session::flash('success-message', 'Departement was delete!');

        return  redirect()->route('departmnetsIndex');
    }
}
