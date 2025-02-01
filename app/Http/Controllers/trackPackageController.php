<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tracking;

class trackPackageController extends Controller
{
    public function trackPackage(Request $request) {
        // dd($request->all());
        $validated = $request->validate(['tracking_number' => 'required|string']);
        
        // Get tracking information with relationships
        $tracking = Tracking::with(['address', 'package'])
            ->where('tracking_number', $validated['tracking_number'])
            ->first();
        
        // Add error handling if tracking not found
        if (!$tracking) {
            return redirect()->back()
                ->withErrors(['tracking_number' => 'Tracking number not found.'])
                ->withInput();
        }

        return view('pages.user.tracking', ['tracking' => $tracking]);
    }
}
