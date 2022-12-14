<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Checkout;

class DashboardController_admin extends Controller
{
    public function index()
    {
        $checkouts = Checkout::with('Camp')->get(); // ini untuk ambil nama user yang checkout dari id user yang login
        return view('admin.dashboard', [
            'checkouts' => $checkouts,
        ]);
    }
}