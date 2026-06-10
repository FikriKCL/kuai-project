<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProducts    = Product::count();
        $activeProducts   = Product::where('is_active', true)->count();
        $totalOrders      = Order::count();
        $pendingOrders    = Order::where('status', 'pending')->count();
        $totalRevenue     = Order::where('status', 'completed')->sum('total_amount');
        $todayRevenue     = Order::where('status', 'completed')
                                 ->whereDate('created_at', today())
                                 ->sum('total_amount');

        // Monthly revenue for chart (last 6 months)
        $monthlyRevenue = Order::where('status', 'completed')
            ->where('created_at', '>=', now()->subMonths(6))
            ->select(
                DB::raw('MONTH(created_at) as month'),
                DB::raw('YEAR(created_at) as year'),
                DB::raw('SUM(total_amount) as total')
            )
            ->groupBy('year', 'month')
            ->orderBy('year')
            ->orderBy('month')
            ->get();

        // Top products by sales
        $topProducts = OrderItem::select('product_name', DB::raw('SUM(quantity) as total_qty'), DB::raw('SUM(price * quantity) as total_revenue'))
            ->groupBy('product_name')
            ->orderByDesc('total_qty')
            ->limit(5)
            ->get();

        // Recent orders
        $recentOrders = Order::with('items')->latest()->limit(10)->get();

        // Order status distribution
        $orderStats = Order::select('status', DB::raw('COUNT(*) as count'))
            ->groupBy('status')
            ->pluck('count', 'status');

        $monthLabels   = [];
        $monthData     = [];
        for ($i = 5; $i >= 0; $i--) {
            $date = now()->subMonths($i);
            $monthLabels[] = $date->format('M Y');
            $found = $monthlyRevenue->first(fn($r) => $r->month == $date->month && $r->year == $date->year);
            $monthData[] = $found ? (float) $found->total : 0;
        }

        return view('admin.dashboard', compact(
            'totalProducts', 'activeProducts', 'totalOrders', 'pendingOrders',
            'totalRevenue', 'todayRevenue', 'topProducts', 'recentOrders',
            'orderStats', 'monthLabels', 'monthData'
        ));
    }
}
