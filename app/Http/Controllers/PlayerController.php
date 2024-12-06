<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{
    public function index() {
        // $player = Player::find(2);
        // $roles = $player->roles;

        $players = Player::with('roles')->get();

        return view('players', compact('players'));
    }


}
