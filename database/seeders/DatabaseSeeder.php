<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create admin user
        User::create([
            'name'     => 'Admin Kuai',
            'email'    => 'admin@kuai.id',
            'password' => Hash::make('password'),
            'is_admin' => true,
        ]);

        // Create sample products
        $products = [
            ['name' => 'Deep Cleaning', 'description' => 'Pembersihan mendalam untuk semua jenis sepatu', 'price' => 50000, 'category' => 'Cleaning', 'stock' => 100],
            ['name' => 'White Shoe Treatment', 'description' => 'Perawatan khusus sepatu putih agar tetap cerah', 'price' => 60000, 'category' => 'Treatment', 'stock' => 80],
            ['name' => 'Half Suede Clean', 'description' => 'Bagian sepatu yang memiliki suede', 'price' => 60000, 'category' => 'Cleaning', 'stock' => 75],
            ['name' => 'Full Suede Restoration', 'description' => 'Restorasi penuh untuk sepatu suede', 'price' => 85000, 'category' => 'Restoration', 'stock' => 50],
            ['name' => 'Leather Polish', 'description' => 'Poles sepatu kulit agar kembali bersinar', 'price' => 70000, 'category' => 'Polish', 'stock' => 60],
            ['name' => 'Sneaker Repaint', 'description' => 'Pengecatan ulang sneaker sesuai warna asli', 'price' => 120000, 'category' => 'Restoration', 'stock' => 30],
            ['name' => 'Sole Repair', 'description' => 'Perbaikan sol sepatu yang rusak atau terlepas', 'price' => 45000, 'category' => 'Repair', 'stock' => 90],
            ['name' => 'Deodorizing', 'description' => 'Penghilangan bau sepatu yang mengganggu', 'price' => 35000, 'category' => 'Treatment', 'stock' => 120],
            ['name' => 'Premium Package', 'description' => 'Paket lengkap perawatan sepatu premium', 'price' => 150000, 'category' => 'Package', 'stock' => 40],
            ['name' => 'Quick Clean', 'description' => 'Pembersihan cepat 30 menit jadi', 'price' => 30000, 'category' => 'Cleaning', 'stock' => 200],
        ];

        foreach ($products as $p) {
            Product::create($p + ['is_active' => true]);
        }

        // Create sample orders with various dates for chart data
        $names = ['Budi Santoso', 'Siti Rahayu', 'Ahmad Fauzi', 'Dewi Lestari', 'Rizki Pratama'];
        $phones = ['08123456789', '08234567890', '08345678901', '08456789012', '08567890123'];
        $statuses = ['pending', 'processing', 'completed', 'completed', 'completed'];

        for ($i = 0; $i < 20; $i++) {
            $customerIdx = $i % 5;
            $product = Product::inRandomOrder()->first();
            $qty = rand(1, 3);
            $total = $product->price * $qty;

            $order = Order::create([
                'customer_name'    => $names[$customerIdx],
                'customer_phone'   => $phones[$customerIdx],
                'customer_address' => 'Jl. Contoh No. ' . ($i + 1) . ', Bandung',
                'total_amount'     => $total,
                'status'           => $statuses[$i % 5],
                'created_at'       => now()->subDays(rand(0, 180)),
            ]);

            OrderItem::create([
                'order_id'     => $order->id,
                'product_id'   => $product->id,
                'product_name' => $product->name,
                'price'        => $product->price,
                'quantity'     => $qty,
            ]);

            // Update timestamp
            $order->update(['updated_at' => $order->created_at]);
        }
    }
}
