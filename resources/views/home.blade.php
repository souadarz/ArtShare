<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white">
    <div class="container mx-auto px-4">
        <!-- Hero Section with Colorful Paint Splash -->
        <section class="relative h-[600px] flex items-center justify-center text-center overflow-hidden">
            <div class="absolute inset-0 z-0 opacity-30">
                <svg viewBox="0 0 1440 600" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
                    <defs>
                        <linearGradient id="paintSplash">
                            <stop offset="0%" stop-color="#FF0000"/>
                            <stop offset="20%" stop-color="#FF6B00"/>
                            <stop offset="40%" stop-color="#FFFF00"/>
                            <stop offset="60%" stop-color="#00FF00"/>
                            <stop offset="80%" stop-color="#0000FF"/>
                            <stop offset="100%" stop-color="#FF00FF"/>
                        </linearGradient>
                    </defs>
                    <path 
                        d="M0,300 Q720,600 1440,300 T2880,600" 
                        fill="url(#paintSplash)" 
                        opacity="0.6"
                    />
                </svg>
            </div>
            
            <div class="relative z-10 text-center">
                <h1 class="text-5xl font-bold mb-4">Découvrez l'Art Contemporain</h1>
                <p class="text-xl mb-6">Une expérience immersive au cœur de l'art moderne</p>
                <a href="#" class="bg-black text-white px-6 py-3 rounded-full hover:bg-gray-800 transition">Explorer la Collection</a>
            </div>
        </section>

        <!-- Expositions en Vedette -->
        <section class="my-16">
            <h2 class="text-3xl font-bold text-center mb-12">Expositions en Vedette</h2>
            <div class="grid grid-cols-3 gap-8">
                <!-- Abstract Art -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="/api/placeholder/400/300" alt="Art Abstrait Moderne" class="w-full h-64 object-cover"/>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">L'Art Abstrait Moderne</h3>
                        <p class="text-gray-600">Une exploration des formes et couleurs contemporaines</p>
                    </div>
                </div>

                <!-- Sculptures -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="/api/placeholder/400/300" alt="Sculptures" class="w-full h-64 object-cover"/>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Sculptures</h3>
                        <p class="text-gray-600">La matière transformée en émotion pure</p>
                    </div>
                </div>

                <!-- Photography -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="/api/placeholder/400/300" alt="Photographie" class="w-full h-64 object-cover"/>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">La Photographie</h3>
                        <p class="text-gray-600">Capturer l'instant, transformer la lumière en émotion</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Notre Vision -->
        <section class="bg-gray-100 py-16 text-center">
            <div class="max-w-2xl mx-auto">
                <h2 class="text-3xl font-bold mb-6">Notre Vision</h2>
                <p class="text-lg text-gray-700 mb-8">ArtShare est plus qu'une simple galerie d'art. C'est un espace où l'art contemporain prend vie, où chaque œuvre raconte une histoire unique.</p>
                <a href="#" class="bg-pink-500 text-white px-6 py-3 rounded-full hover:bg-pink-600 transition">En savoir plus</a>
            </div>
        </section>
    </div>
</body>
</html>