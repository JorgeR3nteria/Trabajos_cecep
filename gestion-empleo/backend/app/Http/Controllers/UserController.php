<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::leftJoin('roles', 'users.role_id', '=', 'roles.id')
            ->leftJoin('countrys', 'users.country_id', '=', 'countrys.id')
            ->leftJoin('cities', 'users.city_id', '=', 'cities.id')
            ->leftJoin('neighborhoods', 'users.neighborhood_id', '=', 'neighborhoods.id')
            ->leftJoin('eps', 'users.eps_id', '=', 'eps.id')
            ->select('users.*', 'roles.nameRole', 'countrys.nameCountry', 'cities.nameCity', 'neighborhoods.nameNeighborhood', 'eps.nameEps')
            ->get();

        return response()->json($users);
    }

    public function create(Request $request)
    {
        $country = $request->input("country_id");
        $city = $request->input("city_id");
        $neighborhood = $request->input("neighborhood_id");
        $eps = $request->input("eps_id");
        $role = $request->input("role_id");
        $address = $request->input("address");
        $email = $request->input("email");
        $mobile = $request->input("mobile");
        $lastname = $request->input("lastname");
        $name = $request->input("name");
        $password = $request->input("password");
        if (empty($role)) return response()->json(["message" => "EL CAMPO $role ESTA VACIO"], 404);
        if (empty($address)) return response()->json(["message" => "EL CAMPO $address ESTA VACIO"], 404);
        if (empty($email)) return response()->json(["message" => "EL CAMPO $email ESTA VACIO"], 404);
        if (empty($mobile)) return response()->json(["message" => "EL CAMPO $mobile ESTA VACIO"], 404);
        if (empty($eps)) return response()->json(["message" => "EL CAMPO $eps ESTA VACIO"], 404);

        $user = new User();
        $user->role_id = $role;
        $user->country_id = $country;
        $user->city_id = $city;
        $user->neighborhood_id = $neighborhood;
        $user->eps_id = $eps;
        $user->email = $email;
        $user->address = $address;
        $user->mobile = $mobile;
        $user->name = $name;
        $user->lastname = $lastname;
        $user->password = $password;
        $user->save();

        return response()->json(["message" => "EL DATO HA SIDO GUARDADO"]);
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        return response()->json(["message" => "EL User HA SIDO ELIMINADO"]);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $user->role_id = $request->input("role_id");
        $user->country_id = $request->input("country_id");
        $user->city_id = $request->input("city_id");
        $user->neighborhood_id = $request->input("neighborhood_id");
        $user->eps_id = $request->input("eps_id");
        $user->email = $request->input("email");
        $user->address = $request->input("address");
        $user->mobile = $request->input("mobile");
        $user->name = $request->input("name");
        $user->lastname = $request->input("lastname");
        $user->password = $request->input("password");
        $user->save();
        
        return response()->json(["message" => "EL User HA SIDO ACTUALIZADO"]);
    }
}
