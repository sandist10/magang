@extends('layouts.app')


@section('title','Dashboard')


@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
    @foreach($stats as $s)
    <div class="bg-white p-4 rounded-lg shadow-sm">
        <div class="flex items-center justify-between">
            <div>
                <div class="text-sm text-slate-500">{{ $s['title'] }}</div>
                <div class="text-2xl font-bold">{{ $s['value'] }}</div>
            </div>
            <div class="text-sm text-green-600">{{ $s['delta'] }}</div>
        </div>
    </div>
    @endforeach
</div>


<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <div class="col-span-2">
        <div class="bg-white p-4 rounded-lg shadow-sm">
            <h3 class="font-semibold mb-4">Grafik Ringkasan (placeholder)</h3>
            <div class="h-64 flex items-center justify-center text-slate-400">Grafik nanti bisa pakai chart.js</div>
        </div>
    </div>


    <div>
        <div class="bg-white p-4 rounded-lg shadow-sm">
            <h3 class="font-semibold mb-4">Aktivitas Terbaru</h3>
            <ul>
                @foreach($recent as $r)
                <li class="py-2 border-b last:border-b-0">
                    <div class="text-sm font-medium">{{ $r['name'] }}</div>
                    <div class="text-xs text-slate-500">{{ $r['status'] }} · {{ $r['time'] }}</div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection