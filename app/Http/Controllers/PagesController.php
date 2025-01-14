<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboard()
    {
        return view('pages.admin.dashboard', [
            'title' => 'Dashboard',
            'description' => 'Welcome to the admin panel'
        ]);
    }
}
