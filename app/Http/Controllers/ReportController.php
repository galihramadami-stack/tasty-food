<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Food;

class ReportController extends Controller
{
    public function index()
    {
        $totalOrders = Order::count();
        $completedOrders = Order::where('status', 'selesai')->count();
        $pendingOrders = Order::where('status', 'menunggu')->count();
        $totalRevenue = Order::where('status', 'selesai')->sum('total_price');
        
        $topFoods = Food::orderByDesc('sold')->take(5)->get();
        
        $recentOrders = Order::latest()->take(10)->get();

        return view('admin.report.index', compact(
            'totalOrders', 
            'completedOrders', 
            'pendingOrders', 
            'totalRevenue',
            'topFoods',
            'recentOrders'
        ));
    }
}
