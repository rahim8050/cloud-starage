<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Our Blog | Mindful Scribbles</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <a href="/" class="flex items-center">
                    <span class="text-2xl font-bold text-indigo-600">Mindful Scribbles</span>
                </a>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="text-gray-600 hover:text-indigo-600 transition">Home</a>
                    <a href="/about" class="text-indigo-600">About</a>
                    <a href="/contact" class="text-gray-600 hover:text-indigo-600 transition">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="py-16">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-gray-800 mb-6">Our Story</h1>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Sharing ideas that inspire, educate, and transform lives through the power of words.
                </p>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="order-2 md:order-1">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Who We Are</h2>
                    <p class="text-gray-600 mb-6">
                        At Mindful Scribbles, we're a team of passionate writers, thinkers, and storytellers
                        dedicated to creating content that matters. Founded in 2020, our blog has grown into
                        a community of curious minds seeking personal growth and meaningful connections.
                    </p>
                    <p class="text-gray-600 mb-6">
                        We believe in the transformative power of storytelling and strive to bring you
                        articles that challenge perspectives, spark creativity, and encourage positive change.
                    </p>
                </div>
                <div class="order-1 md:order-2">
                    <img src="/images/team.jpg" alt="Our team working together"
                         class="rounded-lg shadow-xl w-full h-auto object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-16 bg-indigo-50">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Our Core Values</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-4">Authenticity</h3>
                    <p class="text-gray-600">We prioritize genuine storytelling and honest perspectives in every piece we publish.</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-4">Quality</h3>
                    <p class="text-gray-600">Every article undergoes rigorous editing to ensure excellence in content and clarity.</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-4">Community</h3>
                    <p class="text-gray-600">We foster a supportive environment where ideas are shared and discussions flourish.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-16 bg-gray-800 text-white">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Join Our Newsletter</h2>
            <p class="text-gray-300 mb-8 max-w-xl mx-auto">
                Get weekly updates with our latest articles and exclusive content straight to your inbox.
            </p>
            <form method="POST" action="/subscribe" class="max-w-md mx-auto flex gap-4">
                <input type="email" placeholder="Enter your email"
                       class="flex-1 px-4 py-3 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                <button type="submit"
                        class="bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700 transition-colors">
                    Subscribe
                </button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <p>&copy; 2023 Mindful Scribbles. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
