<?php

namespace App\Http\Controllers;

use App\Models\Ban;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class BannedController extends Controller
{
    public function __invoke()
    {
        $ipBan = Ban::where('type', '=', 'ip')
            ->where('ip', '=', request()->ip())
            ->where('expire_date', '>', Carbon::now())
            ->orderByDesc('id')
            ->first();

        return view('banned', [
            'ban' => $ipBan ?? Auth::user()->ban
        ]);
    }
}
