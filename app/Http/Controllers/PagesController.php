<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tracking;
use App\Models\Addresses;
use App\Models\Packages;
use App\Models\Clients;

class PagesController extends Controller
{
    public function dashboard()
    {
        return view('pages.admin.dashboard', [
            'title' => 'Dashboard',
            'description' => 'Welcome to the admin panel',
            'packagesCount' => Packages::count(),
            'trackingCount' => Tracking::count(),
            'addressCount' => Addresses::count(),
            'clientCount' => Clients::count()
        ]);
    }
}
