<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Responsable;

class ResponsableController extends Controller
{
    public function index()
    {
        $responsables = Responsable::all();
        return view("responsables.mostrar")
            ->with("responsables", $responsables);
    }

    public function create()
    {
        return view("responsables.registrar");
    }

    public function store(Request $request)
    {
        $validacion = $request->validate([
            "nombres" => "required",
            "apellidos" => "required"
        ]);

        Responsable::create($request->all());
        return redirect("/responsables/mostrar");
    }

    public function edit($id)
    {
        $responsable = Responsable::find($id);
        return view("responsables.editar")
            ->with("responsable", $responsable);
    }

    public function update(Request $request, $id)
    {
        $validacion = $request->validate([
            "nombres" => "required",
            "apellidos" => "required"
        ]);

        $responsable = Responsable::find($id);
        $responsable->update($request->all());
        return redirect("/responsables/mostrar");
    }

    public function destroy($id)
    {
        $responsable = Responsable::find($id);
        $responsable->delete();
        return redirect("/responsables/mostrar");
    }

    public function show($id)
{
    $responsable = Responsable::find($id);
    return view("responsables.mostrar-detalle")
        ->with("responsable", $responsable);
}
}

