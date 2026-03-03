<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index()
    {
        // Data statis (tanpa database)
        $stats = [
            ['title' => 'Users', 'value' => 1245, 'delta' => '+3.4%'],
            ['title' => 'Sales', 'value' => 'Rp 87.500.000', 'delta' => '+1.2%'],
            ['title' => 'Orders', 'value' => 312, 'delta' => '-0.8%'],
            ['title' => 'Active', 'value' => '84%', 'delta' => '+0.6%'],
        ];


        $recent = [
            ['id' => 1, 'name' => 'Pesanan #1023', 'status' => 'Selesai', 'time' => '2 jam lalu'],
            ['id' => 2, 'name' => 'Pesanan #1024', 'status' => 'Proses', 'time' => '1 jam lalu'],
            ['id' => 3, 'name' => 'Pengguna baru', 'status' => 'Aktif', 'time' => '30 menit lalu'],
        ];


        return view('dashboard', compact('stats', 'recent'));
    }
}
