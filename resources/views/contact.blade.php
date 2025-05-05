<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-8">
    <!-- Image Grid Container -->
    <div class="max-w-6xl mx-auto">
        <h1 class="text-3xl font-bold text-center mb-8">Social Media</h1>
    </div>

    <div class="max-w-6xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-4">
        <!-- Image 1 -->
        <div class="aspect-square">
            <a href="https://twitter.com" class="block">
                <img src="twitter.png"
                     alt="Twitter logo"
                     class="w-full h-full object-cover rounded-lg shadow-lg"
                     loading="lazy"
                     width="600"
                     height="600">
                <p class="mt-2 text-center hover:text-[#1DA1F2] transition-colors">Twitter</p>
            </a>
            </div>

        <!-- Image 2 -->
        <div class="aspect-square">
            <a href="https://facebook.com" class="block">
                <img src="facebook.png"
                     alt="Facebook logo"
                     class="w-full h-full object-cover rounded-lg shadow-lg"
                     loading="lazy"
                     width="600"
                     height="600">
                <p class="mt-2 text-center hover:text-[#1877F2] transition-colors">Facebook</p>
            </a>
            </div>

        <!-- Image 3 -->
        <div class="aspect-square">
            <a href="https://instagram.com" class="block">
                <img src="instagram.png"
                     alt="Instagram logo"
                     class="w-full h-full object-cover rounded-lg shadow-lg"
                     loading="lazy"
                     width="600"
                     height="600">
                <p class="mt-2 text-center hover:text-[#E1306C] transition-colors">Instagram</p>
            </a>
            </div>

        <!-- Image 4 -->
        <div class="aspect-square">
            <a href="https://pinterest.com" class="block">
                <img src="pinterest.png"
                     alt="Pinterest logo"
                     class="w-full h-full object-cover rounded-lg shadow-lg"
                     loading="lazy"
                     width="600"
                     height="600">
                <p class="mt-2 text-center hover:text-[#E60023] transition-colors">Pinterest</p>
            </a>
        </div>
        <!-- Image 5 -->
        <div class="aspect-square">
            <a href="https://linkedin.com" class="block">
                <img src="linked.png"
                     alt="LinkedIn logo"
                     class="w-full h-full object-cover rounded-lg shadow-lg"
                     loading="lazy"
                     width="600"
                     height="600">
                <p class="mt-2 text-center hover:text-[#0077B5] transition-colors">LinkedIn</p>
            </a>
    </div>
</body>

</html>
