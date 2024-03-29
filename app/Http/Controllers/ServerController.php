<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Server;
use App\Models\User;
use Illuminate\Http\Request;

class ServerController extends Controller
{
    function index()
    {
//        $servers = Server::all();

//        $servers = Server::query()->with('logs')->get();

        $servers = Server::query()
            ->addSelect([
                'last_activity' => Log::select('created_at')
                    ->whereColumn('server_id', 'servers.id')
                    ->latest()
                    ->take(1)
            ])
            ->withCasts(['last_activity' => 'datetime'])
            ->get();

//        $servers = Server::query()->with('latestLog')->get();

        return view('servers', ['servers' => $servers]);
    }
}
