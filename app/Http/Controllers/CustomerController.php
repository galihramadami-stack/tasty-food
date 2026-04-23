<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index()
    {
        // Ambil data pelanggan dari tabel orders
        // Kita kelompokkan berdasarkan customer_name dan hitung total order serta total uang yang dihabiskan
        $customers = Order::select('customer_name', DB::raw('COUNT(*) as total_orders'), DB::raw('SUM(total_price) as total_spent'))
            ->whereNotNull('customer_name')
            ->where('customer_name', '!=', '')
            ->groupBy('customer_name')
            ->orderByDesc('total_orders')
            ->paginate(10);

        return view('admin.customer.index', compact('customers'));
    }
}
