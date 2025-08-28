<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Header -->
    <header class="bg-white shadow-md">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-blue-600">MyPortfolio</h1>
            <nav class="space-x-6">
                <a href="/" class="hover:text-blue-600">Home</a>
                <a href="/about" class="hover:text-blue-600">About</a>
                <a href="/projects" class="hover:text-blue-600">Projects</a>
                <a href="/contact" class="hover:text-blue-600">Contact</a>
            </nav>
        </div>
    </header>

    <!-- Nội dung -->
    <main class="container mx-auto px-6 py-10">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-200 py-6 mt-10">
        <div class="container mx-auto text-center">
            <p>&copy; {{ date('Y') }} MyPortfolio. All rights reserved.</p>
            <div class="mt-2 space-x-4">
                <a href="#" class="hover:text-white">LinkedIn</a>
                <a href="#" class="hover:text-white">GitHub</a>
                <a href="#" class="hover:text-white">Twitter</a>
            </div>
        </div>
    </footer>

</body>
</html>
