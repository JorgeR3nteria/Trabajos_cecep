<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Neighborhood;

class NeighborhoodController extends Controller
{
    public function index()
    {
        return response()->json(Neighborhood::all() ?? []);
    }

    public function create(Request $request)
    {
        $value = $request->input("nameNeighborhood");
        if (empty($value)) return response()->json(["message" => "EL CAMPO ESTA VACIO"], 404);

        $neighborhood = new Neighborhood();
        $neighborhood->nameNeighborhood = $value;
        $neighborhood->save();

        return response()->json(["message" => "EL DATO HA SIDO GUARDADO"]);
    }

    public function delete($id)
    {
        $neighborhood = Neighborhood::find($id);
        $neighborhood->delete();

        return response()->json(["message" => "EL Neighborhood HA SIDO ELIMINADO"]);
    }

    public function update(Request $request, $id)
    {
        $neighborhood = Neighborhood::find($id);
        $neighborhood->nameNeighborhood = $request->input("nameNeighborhood");
        $neighborhood->save();

        return response()->json(["message" => "EL Neighborhood HA SIDO ACTUALIZADO"]);
    }
}
