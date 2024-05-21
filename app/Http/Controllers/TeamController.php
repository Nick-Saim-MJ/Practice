<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Http\Response;

class TeamController extends Controller
{
    public function index(){
        $teams=Team::all();
        return response()->json($teams,Response::HTTP_OK);
    }

    public function store(Request $request){
        $team=Team::create($request->all());
        return response()->json([
            'message'=>"Registro creado satisfactoriamente",
            'category'=>$team
        ],Response::HTTP_CREATED);
    }

    public function update(Request $request,$team){
        $team=Team::find($team);
        $team->update($request->only('name','startdate'));
        return response()->json([
            'message'=>"Registro actualizado satisfactoriamente",
            'category'=>$team
        ],Response::HTTP_CREATED);
    }

    public function destroy($team){
        $team=Team::find($team);
        $team->delete();
        return response()->json([
            'message'=>"Registro eliminado satisfactoriamente"
        ],Response::HTTP_OK);

}
}
