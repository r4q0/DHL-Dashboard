<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;

class RenderController extends Controller
{
    public static function renderCreate()
    {
        return view('create');
    }
    public static function create(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'tracking_number' => 'required',
            'zipcode' => 'required',
        ]);
        $order = new order();
        $order->name = $validated['name'];
        $order->tracking_number = $validated['tracking_number'];
        $order->zipcode = $validated['zipcode'];
        $order->save();
        return redirect('/create');
    }
}
