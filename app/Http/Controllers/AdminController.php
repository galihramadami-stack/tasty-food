<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // 1. Total Menu
        $totalMenu = Food::count();
        $newMenuThisMonth = Food::whereMonth('created_at', Carbon::now()->month)->count();

        // 2. Pendapatan (Pesanan Selesai)
        $totalRevenue = Order::where('status', 'selesai')->sum('total_price');
        $completedOrdersCount = Order::where('status', 'selesai')->count();

        // 3. Pesanan Hari Ini
        $ordersToday = Order::whereDate('created_at', Carbon::today())->count();
        $pendingOrders = Order::where('status', 'menunggu')->count();

        // 4. Rating & Reviews (Static as there's no table)
        $rating = 4.8;
        $totalReviews = 284;

        // 5. Popular Categories
        $categories = Food::select('category', DB::raw('count(*) as total'))
            ->groupBy('category')
            ->orderByDesc('total')
            ->take(3)
            ->get();
        $totalFoodForPercentage = $totalMenu > 0 ? $totalMenu : 1;

        // 6. Popular Menu Table
        $popularMenus = DB::table('food')
            ->leftJoin('order_items', 'food.id', '=', 'order_items.food_id')
            ->select('food.id', 'food.name', 'food.category', 'food.price', 'food.image', DB::raw('COALESCE(SUM(order_items.quantity), 0) as sold'))
            ->groupBy('food.id', 'food.name', 'food.category', 'food.price', 'food.image')
            ->orderByDesc('sold')
            ->take(5)
            ->get();

        // 7. Sales Chart (Weekly)
        $salesLabels = [];
        $salesData = [];
        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::now()->subDays($i);
            $salesLabels[] = $date->format('D');
            
            $revenue = Order::whereDate('created_at', $date)
                            ->where('status', 'selesai')
                            ->sum('total_price');
                            
            $salesData[] = $revenue;
        }

        $pendingOrdersCount = $pendingOrders;

        return view('admin.dashboard', compact(
            'totalMenu', 'newMenuThisMonth', 'totalRevenue', 'completedOrdersCount',
            'ordersToday', 'pendingOrders', 'rating', 'totalReviews',
            'categories', 'totalFoodForPercentage', 'popularMenus',
            'salesLabels', 'salesData', 'pendingOrdersCount'
        ));
    }

    public function store(Request $request)
    {
        Food::create($request->all());
        return redirect()->back()->with('success', 'Menu berhasil ditambah!');
    }
}
