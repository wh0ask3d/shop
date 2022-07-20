<?php

namespace App\Http\Controllers;

use App\Models\Server;
use Illuminate\Http\Request;

class ServerController extends Controller
{
    public function showservers()
    {
        $servers= Server::all();

        return view('servers', compact('servers'));
    }
}
