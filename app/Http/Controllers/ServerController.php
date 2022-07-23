<?php

namespace App\Http\Controllers;

use App\Models\Server;
use Illuminate\Http\Request;

class ServerController extends Controller
{
    public function showServers()
    {
        $servers= Server::all();

        return view('servers', compact('servers'));
    }
    public function addServer()
    {
        return view('addserver');
    }
    public function updateServer(Request $request)
    {
        Server::create([
            'name' => $request->name,
            'ip' => $request->ip,
            'port' => $request->port,
            'rconport' => $request->rconport,

         ]);
        return redirect()->route('');
    }
    public function deleteServer($id)
    {
        $server = Server::find($id);
        $server->delete();
        return response()->json(['success' => 'Deleted']);
    }
}
