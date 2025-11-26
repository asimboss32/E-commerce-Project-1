<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function adminDashboard ()
    {
        $totalOrders = Order::count();
        $pendingOrders = Order::where('status', 'pending')->count(); //3
        $confirmedOrders = Order::where('status', 'confirmed')->count(); //6
        $deliveredOrders = Order::where('status', 'delivered')->count();
        $cancelledOrders = Order::where('status', 'cancelled')->count();
        return view ('backend.dashboard', compact('totalOrders', 'pendingOrders', 'confirmedOrders', 'deliveredOrders', 'cancelledOrders'));
    }
}
