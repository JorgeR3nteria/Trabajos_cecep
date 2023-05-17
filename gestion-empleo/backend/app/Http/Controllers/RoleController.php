<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        return response()->json(Role::all() ?? []);
    }

    public function create(Request $request)
    {
        $value = $request->input("nameRole");
        if (empty($value)) return response()->json(["message" => "EL CAMPO ESTA VACIO"], 404);

        $role = new Role();
        $role->nameRole = $value;
        $role->save();

        return response()->json(["message" => "EL DATO HA SIDO GUARDADO"]);
    }

    public function delete($id)
    {
        $role = Role::find($id);
        $role->delete();

        return response()->json(["message" => "EL ROLE HA SIDO ELIMINADO"]);
    }

    public function update(Request $request, $id)
    {
        $role = Role::find($id);
        $role->nameRole = $request->input("nameRole");
        $role->save();

        return response()->json(["message" => "EL ROLE HA SIDO ACTUALIZADO"]);
    }
}
