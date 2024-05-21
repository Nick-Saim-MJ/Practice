<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Player;
use App\Traits\ApiResponser;
use Illuminate\Http\Response;

class PlayerController extends Controller
{
    public function index(){
        $players=Player::all();
        return response()->json($players,Response::HTTP_OK);
    }

    public function store(Request $request){
        $player=Player::create($request->all());
        return response()->json([
            'message'=>"Registro creado satisfactoriamente",
            'category'=>$player
        ],Response::HTTP_CREATED);
    }

    public function update(Request $request,$player){
        $player=Player::find($player);
        $player->update($request->only('name','slug'));
        return response()->json([
            'message'=>"Registro actualizado satisfactoriamente",
            'category'=>$player
        ],Response::HTTP_CREATED);
    }

    public function destroy($player){
        $player=Player::find($player);
        $player->delete();
        return response()->json([
            'message'=>"Registro eliminado satisfactoriamente"
        ],Response::HTTP_OK);

}
}
