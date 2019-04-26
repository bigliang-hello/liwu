<?php

namespace App\Http\Controllers;

use App\Gift;
use App\RequestApi\RequestApi;
use Illuminate\Http\Request;

class GiftController extends Controller
{
    public function show(Request $request, $id)
    {
        $requestApi = new RequestApi();
        //$gift = $requestApi->getGiftDetail($id);
        $gift = null;
        return view('gifts.show', compact('gift'));
    }
}
