<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Country;

class CountryController extends Controller
{
    public function index()
    {
        return response()->json(Country::all() ?? []);
    }

    public function create(Request $request)
    {
        $value = $request->input("nameCountry");
        if (empty($value)) return response()->json(["message" => "EL CAMPO ESTA VACIO"], 404);

        $country = new Country();
        $country->nameCountry = $value;
        $country->save();

        return response()->json(["message" => "EL DATO HA SIDO GUARDADO"]);
    }

    public function delete($id)
    {
        $country = Country::find($id);
        $country->delete();

        return response()->json(["message" => "EL Country HA SIDO ELIMINADO"]);
    }

    public function update(Request $request, $id)
    {
        $country = Country::find($id);
        $country->nameCountry = $request->input("nameCountry");
        $country->save();

        return response()->json(["message" => "EL Country HA SIDO ACTUALIZADO"]);
    }
}
