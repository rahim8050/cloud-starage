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
    <div class="max-w-6xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-4">
        <!-- Image 1 -->
        <div class="aspect-square">
            <img
                src="https://picsum.photos/600/600?random=1"
                alt="Sample image 1"
                class="w-full h-full object-cover rounded-lg shadow-lg"
                loading="lazy"
                width="600"
                height="600"
            >
        </div>

        <!-- Image 2 -->
        <div class="aspect-square">
            <img
                src="https://picsum.photos/600/600?random=2"
                alt="Sample image 2"
                class="w-full h-full object-cover rounded-lg shadow-lg"
                loading="lazy"
                width="600"
                height="600"
            >
        </div>

        <!-- Image 3 -->
        <div class="aspect-square">
            <img
                src="https://picsum.photos/600/600?random=3"
                alt="Sample image 3"
                class="w-full h-full object-cover rounded-lg shadow-lg"
                loading="lazy"
                width="600"
                height="600"
            >
        </div>

        <!-- Image 4 -->
        <div class="aspect-square">
            <img
                src="https://picsum.photos/600/600?random=4"
                alt="Sample image 4"
                class="w-full h-full object-cover rounded-lg shadow-lg"
                loading="lazy"
                width="600"
                height="600"
            >
        </div>
    </div>
</body>
</html>
