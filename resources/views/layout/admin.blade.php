<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

<div class="flex h-screen">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-gray-900 text-white flex flex-col">
        <div class="p-5 text-xl font-bold border-b border-gray-700">
            Admin Panel
        </div>

        <nav class="flex-1 p-4 space-y-2">
            <a href="/home" class="block px-3 py-2 rounded hover:bg-gray-700">
                Home
            </a>
            <a href="/users" class="block px-3 py-2 rounded hover:bg-gray-700">
                Users
            </a>
        </nav>

        <div class="p-4 border-t border-gray-700">
            <form method="POST" action="/logout">
                @csrf
                <button class="w-full bg-red-600 hover:bg-red-700 py-2 rounded">
                    Logout
                </button>
            </form>
        </div>
    </aside>

    <!-- MAIN CONTENT -->
    <div class="flex-1 flex flex-col">

        <!-- TOPBAR -->
        <header class="bg-white shadow px-6 py-4 flex justify-between items-center">
            <h1 class="text-lg font-semibold">Dashboard</h1>

            <div class="text-sm text-gray-600">
                {{ auth()->user()->name ?? 'Admin' }}
            </div>
        </header>

        <!-- CONTENT -->
        <main class="p-6 overflow-y-auto">
            @yield('content')
        </main>

    </div>

</div>

</body>
</html>