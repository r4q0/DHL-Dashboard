<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;
use App\Http\Controllers\DhlController;

class RenderController extends Controller
{
    public static function renderDashboard()
    {
        return view('welcome', [
            'orders' => order::all()
        ]);
    }

    public static function removeOrder($orderId)
    {
        order::destroy($orderId);
        return redirect('/');
    }

    public static function renderOrder($orderId)
    {
        try {

            $tracking_number = order::find($orderId)->tracking_number;
            $zipcode = order::find($orderId)->zipcode ?? '';
            $data = DhlController::scrapeDHL(order::find($orderId)->tracking_number, order::find($orderId)->zipcode);
        } catch (\Exception $e) {
            $url = route('remove', ['id' => $orderId]);
            return response()->json(['error' => "There is something wrong with the data of this package please make sure that it is real data otherwise delete the order by going to $url"], 404);
        }
        $data = array_reverse($data);
        return view('order', [
            'order' => $data,
            'orderId' => $orderId,
            'url' => env('DHL_URL')."$tracking_number/$zipcode"
        ]);
    }

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
        return redirect(route('welcome'));
    }
}
