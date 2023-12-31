<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class listingController extends Controller
{
    public function index() {
        return view('listings.index', [
            'listings' => Listing::all()
        ]);
    }

    public function show($id) {
        return view('listings.show',
    ['foundlisting' => Listing::find($id)
    
]);
    }
}
