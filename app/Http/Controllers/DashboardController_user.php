<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use Auth;

class DashboardController_user extends Controller
{
    public function index()
    {
        $checkouts = Checkout::with('Camp')->whereUserId((Auth::id()))->get(); // ini untuk ambil nama user yang checkout dari id user yang login
        return view('user.dashboard', [
            'checkouts' => $checkouts,
        ]);
    }
}
