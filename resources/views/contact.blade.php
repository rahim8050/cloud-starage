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
            <img src="twitter.png" alt="Sample image 1"
                class="w-full h-full object-cover rounded-lg shadow-lg" loading="lazy" width="600" height="600">
            <p>Twitter</p>
            </div>

        <!-- Image 2 -->
        <div class="aspect-square">
            <img src="facebook.png" alt="Sample image 2"
                class="w-full h-full object-cover rounded-lg shadow-lg" loading="lazy" width="600" height="600">
                <p>Facebook</p>
            </div>

        <!-- Image 3 -->
        <div class="aspect-square">
            <img src="instagram.png" alt="Sample image 3"
                class="w-full h-full object-cover rounded-lg shadow-lg" loading="lazy" width="600" height="600">

            </div>

        <!-- Image 4 -->
        <div class="aspect-square">
            <img src="pinterest.png" alt="Sample image 4"
                class="w-full h-full object-cover rounded-lg shadow-lg" loading="lazy" width="600" height="600">
        </div>
    </div>
</body>

</html>
