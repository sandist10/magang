<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Dashboard')</title>

    <!-- Ganti sementara: aktifkan Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-50 text-slate-800">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-white border-r">
            <div class="p-6">
                <h1 class="text-xl font-bold">MyApp</h1>
                <p class="text-sm text-slate-500">Admin Dashboard</p>
            </div>
            <nav class="p-4">
                <a href="{{ route('dashboard') }}" class="block py-2 px-4 rounded hover:bg-slate-100">About</a>
                <a href="{{ route('courses') }}" class="block py-2 px-4 rounded hover:bg-slate-100">Course</a>
                <a href="{{ route('settings') }}" class="block py-2 px-4 rounded hover:bg-slate-100">Setting</a>
                <a href="{{ route('dosen') }}" class="block py-2 px-4 rounded hover:bg-slate-100">Dosen</a>
            </nav>
        </aside>


        <!-- Main content -->
        <main class="flex-1 p-8">
            <header class="flex justify-between items-center mb-6">
                <div>
                    <h2 class="text-2xl font-semibold">@yield('heading', 'Dashboard')</h2>
                    <p class="text-sm text-slate-500">Ringkasan aktivitas terbaru</p>
                </div>
                <div>
                    <button class="px-4 py-2 bg-slate-800 text-white rounded">New</button>
                </div>
            </header>


            <div>
                @yield('content')
            </div>
        </main>
    </div>
</body>

</html>