<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Eps;

class EpsController extends Controller
{
    public function index()
    {
        return response()->json(Eps::all() ?? []);
    }

    public function create(Request $request)
    {
        $country = $request->input("country_id");
        $city = $request->input("city_id");
        $neighborhood = $request->input("neighborhood_id");
        $nameEps = $request->input("nameEps");
        $address = $request->input("address");
        $email = $request->input("email");
        $mobile = $request->input("mobile");
        if (empty($nameEps)) return response()->json(["message" => "EL CAMPO $nameEps ESTA VACIO"], 404);
        if (empty($address)) return response()->json(["message" => "EL CAMPO $address ESTA VACIO"], 404);
        if (empty($email)) return response()->json(["message" => "EL CAMPO $email ESTA VACIO"], 404);
        if (empty($mobile)) return response()->json(["message" => "EL CAMPO $mobile ESTA VACIO"], 404);

        $eps = new Eps();
        $eps->country_id = $country;
        $eps->city_id = $city;
        $eps->neighborhood_id = $neighborhood;
        $eps->nameEps = $nameEps;
        $eps->address = $address;
        $eps->email = $email;
        $eps->mobile = $mobile;
        $eps->save();

        return response()->json(["message" => "EL DATO HA SIDO GUARDADO"]);
    }

    public function delete($id)
    {
        $eps = Eps::find($id);
        $eps->delete();

        return response()->json(["message" => "EL Eps HA SIDO ELIMINADO"]);
    }

    public function update(Request $request, $id)
    {
        $eps = Eps::find($id);

        $eps->country_id =  $request->input("country_id");
        $eps->city_id = $request->input("city_id");
        $eps->neighborhood_id = $request->input("neighborhood_id");
        $eps->nameEps = $request->input("nameEps");
        $eps->address = $request->input("address");
        $eps->email =  $request->input("email");;
        $eps->mobile = $request->input("mobile");;
        $eps->save();

        return response()->json(["message" => "EL Eps HA SIDO ACTUALIZADO"]);
    }
}
