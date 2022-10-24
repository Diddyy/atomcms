<?php

namespace App\Http\Controllers;

use App\Models\Rank;

class StaffController extends Controller
{
    public function __invoke()
    {
        return view('community.staff', [
            'employees' => Rank::select('id', 'name', 'badge')
                ->where('id', '>=', setting('min_staff_rank'))
                ->orderByDesc('id')
                ->get(),
        ]);
    }
}