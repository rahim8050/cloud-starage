<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rahim Landing Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-50 font-['Inter']">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm fixed w-full z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="#" class="text-2xl font-bold text-indigo-600"> Rahim BlogHub</a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#" class="text-gray-600 hover:text-indigo-600">Home</a>
                    <a href="#" class="text-gray-600 hover:text-indigo-600">Categories</a>
                    <a href="#" class="text-gray-600 hover:text-indigo-600">About</a>
                    <a href="{{ route('contact') }}" class="text-gray-600 hover:text-indigo-600">Contact</a>

                    @auth
                        <!-- Display when user is logged in -->
                        <span class="text-gray-600">Welcome, {{ Auth::user()->name }}</span>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="text-gray-600 hover:text-indigo-600">Logout</button>
                        </form>
                    @else
                        <!-- Display when user is not logged in -->
                        <a href="{{ route('register') }}" class="text-gray-600 hover:text-indigo-600">Sign Up</a>
                        <a href="{{ route('login') }}" class="text-gray-600 hover:text-indigo-600">Log In</a>
                    @endauth

                    <button class="bg-indigo-600 text-white px-6 py-2 rounded-full hover:bg-indigo-700">
                        Subscribe
                    </button>
                </div>
            </div>
        </div>
    </nav>


<!-- Hero Section -->
<div class="pt-24 pb-16 bg-gradient-to-r from-indigo-500 to-purple-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
            Discover Amazing Content
        </h1>
        <p class="text-xl text-indigo-100 mb-8 max-w-2xl mx-auto">
            Explore insightful articles, tutorials, and stories from passionate writers around the world.
        </p>
        <div class="max-w-md mx-auto">
            <input
                type="text"
                placeholder="Search articles..."
                class="w-full px-6 py-3 rounded-full focus:outline-none focus:ring-2 focus:ring-indigo-400"
            >
        </div>
    </div>
</div>

<!-- Featured Posts -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <h2 class="text-3xl font-bold text-gray-800 mb-8">Featured Posts</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Post Card 1 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
            <img src="https://source.unsplash.com/random/800x600" alt="Post image" class="w-full h-48 object-cover">
            <div class="p-6">
                <div class="flex items-center mb-4">
                    <span class="bg-indigo-100 text-indigo-800 text-sm px-3 py-1 rounded-full">Technology</span>
                    <span class="ml-2 text-sm text-gray-500">5 min read</span>
                </div>
                <h3 class="text-xl font-semibold mb-2">The Future of Web Development</h3>
                <p class="text-gray-600 mb-4">Exploring the latest trends and innovations in modern web development...</p>
                <div class="flex items-center">
                    <img src="https://source.unsplash.com/random/100x100" alt="Author" class="w-10 h-10 rounded-full">
                    <div class="ml-3">
                        <p class="text-sm font-medium">John Doe</p>
                        <p class="text-sm text-gray-500">Aug 15, 2023</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Repeat similar post cards (2 more) -->
    </div>
</div>

<!-- Newsletter Section -->
<div class="bg-indigo-50 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Join Our Newsletter</h2>
        <p class="text-gray-600 mb-8 max-w-xl mx-auto">
            Get weekly updates about new articles, tutorials, and exclusive content straight to your inbox.
        </p>
        <div class="max-w-md mx-auto flex gap-4">
            <input
                type="email"
                placeholder="Enter your email"
                class="flex-1 px-6 py-3 rounded-full focus:outline-none focus:ring-2 focus:ring-indigo-400"
            >
            <button class="bg-indigo-600 text-white px-8 py-3 rounded-full hover:bg-indigo-700">
                Subscribe
            </button>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-gray-800 text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <h3 class="text-lg font-bold mb-4"> Rahim BlogHub</h3>
                <p class="text-gray-400">Connecting readers with great content since 2023</p>
            </div>
            <div>
                <h4 class="font-semibold mb-4">Categories</h4>
                <ul class="space-y-2 text-gray-400">
                    <li><a href="#" class="hover:text-indigo-400">Technology</a></li>
                    <li><a href="#" class="hover:text-indigo-400">Design</a></li>
                    <li><a href="#" class="hover:text-indigo-400">Development</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold mb-4">Company</h4>
                <ul class="space-y-2 text-gray-400">
                    <li><a href="#" class="hover:text-indigo-400">About</a></li>
                    <li><a href="#" class="hover:text-indigo-400">Careers</a></li>
                    <li><a href="#" class="hover:text-indigo-400">Contact</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold mb-4">Follow Us</h4>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-indigo-400">Twitter</a>
                    <a href="#" class="text-gray-400 hover:text-indigo-400">Facebook</a>
                    <a href="#" class="text-gray-400 hover:text-indigo-400">LinkedIn</a>
                </div>
            </div>
        </div>
        <div class="border-t border-gray-700 mt-12 pt-8 text-center text-gray-400">
            <p>&copy; 2025 Rahim BlogHub. All rights reserved.</p>
        </div>
    </div>
</footer>
</body>
</html>

