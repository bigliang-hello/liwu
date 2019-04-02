<?php

namespace App\Http\Controllers;

use App\Gift;
use Illuminate\Http\Request;

class GiftController extends Controller
{
    public function show(Request $request, Gift $gift)
    {
        return view('gifts.show', compact('gift'));
    }
}
