<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;


class PlayerController extends Controller
{
    //
    function addPlayer(Request $req)
    {
        $player = new Player;
        $player->name = $req->name;
        $player->uid = $req->uid;
        $player->role = $req->role;
        $player->save();
        return redirect('thankyou');
    }

    function showPlayer()
    {
        $data= Player::all();
        return view('playerlist', ['players'=>$data]);
    }
    public function managePlayer()
    {
        $data= Player::all();
        return view('admin_control', compact('data'));
    }
    function delete($id)
    {
        $data = Player::find($id);
        $data->delete();
        return redirect('admin_control');
    }
    function showData($id)
    {
        $data= Player::find($id);
        return view('edit', ['data'=>$data]);
    }
    function update(Request $req)
    {
        $data = Player::find($req->id);
        $data->name=$req->name;
        $data->uid=$req->uid;
        $data->role=$req->role;
        $data->save();
        return redirect('admin_control');
    }
}
