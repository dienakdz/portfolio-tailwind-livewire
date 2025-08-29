<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Portfolio</title>
    @vite('resources/css/app.css') {{-- Nếu dùng Vite cho Tailwind --}}
    @livewireStyles
</head>
<body class="bg-gray-100 min-h-screen">

    <header class="bg-gray-800 text-white p-4">
        <h1 class="text-xl font-bold">Admin Dashboard</h1>
    </header>

    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-200 min-h-screen p-4">
            <nav class="space-y-2">
                <a href="#" class="block px-2 py-1 rounded hover:bg-gray-300">Projects</a>
                <a href="#" class="block px-2 py-1 rounded hover:bg-gray-300">Skills</a>
                <a href="#" class="block px-2 py-1 rounded hover:bg-gray-300">Contacts</a>
            </nav>
        </aside>

        <!-- Main content -->
        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>

    @livewireScripts
</body>
</html>
