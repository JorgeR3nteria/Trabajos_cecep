<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\City;

class CityController extends Controller
{
    public function index()
    {
        return response()->json(City::all() ?? []);
    }

    public function create(Request $request)
    {
        $value = $request->input("nameCity");
        if (empty($value)) return response()->json(["message" => "EL CAMPO ESTA VACIO"], 404);

        $city = new City();
        $city->country_id = $request->input("country_id");
        $city->nameCity = $value;
        $city->save();

        return response()->json(["message" => "EL DATO HA SIDO GUARDADO"]);
    }

    public function delete($id)
    {
        $city = City::find($id);
        $city->delete();

        return response()->json(["message" => "EL City HA SIDO ELIMINADO"]);
    }

    public function update(Request $request, $id)
    {
        $city = City::find($id);
        $city->country_id = $request->input("country_id");
        $city->nameCity = $request->input("nameCity");
        $city->save();

        return response()->json(["message" => "EL City HA SIDO ACTUALIZADO"]);
    }
}
