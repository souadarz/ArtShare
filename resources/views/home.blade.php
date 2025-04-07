<x-header/>
<div class="bg-white">
    <div class="w-full mx-auto">
        <!-- Hero Section with Colorful Paint Splash -->
        <section class="relative h-[600px] flex items-center justify-center text-center overflow-hidden">
            <div class="absolute inset-0 z-0 opacity-100">
                <img src="{{ asset('images/2304 1.png') }}" alt="image" 
                        class="w-full h-64 md:h-[550px] object-cover rounded-lg shadow-lg"/>
            </div>
            
            <div class="relative z-10 text-center">
                <h1 class="text-5xl font-bold mb-4">L’art sans limites</h1>
                <!-- <p class="text-xl mb-6">Une expérience immersive au cœur de l'art</p> -->
                <p class="text-xl mb-6">Explorez, créez, partagez...Plongez dans un monde où l’imagination et la créativité n’a pas de frontières.</p>
                <a href="#" class="bg-black text-white px-6 py-3 rounded-full hover:bg-gray-800 transition">Explorer la Collection</a>
            </div>
        </section>

        <section class="space-y-12 mb-8">
            <h2 class="text-2xl md:text-4xl font-bold text-center mb-8 md:mb-12">Expositions en Vedette</h2>

            <!-- L'Art Abstrait-->
            <div class="flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-8 mb-8 md:mb-12">
                <div class="w-full md:w-7/12 ml-8 mr-8">
                    <img src="{{ asset('images/art-8324770_1280.jpg') }}" alt="Art Abstrait Moderne" 
                        class="w-full h-64 md:h-[300px] object-cover rounded-lg shadow-lg"/>
                </div>
                <div class="w-full md:w-1/3 text-center md:text-left">
                    <h3 class="text-xl md:text-2xl font-semibold mb-2 md:mb-4">L'Art Abstrait Moderne</h3>
                    <p class="text-sm md:text-base text-gray-600">Une exploration des formes et couleurs contemporaines</p>
                </div>
            </div>

            <!-- Sculptures -->
            <div class="flex flex-col-reverse md:flex-row items-center space-y-4 md:space-y-0 md:space-x-8 mb-8 md:mb-12 mr15">
                <div class="w-full md:w-1/3 text-center md:text-right">
                    <h3 class="text-xl md:text-2xl font-semibold mb-2 md:mb-4">Sculptures</h3>
                    <p class="text-sm md:text-base text-gray-600">La matière transformée en émotion. Sculpter, c’est capturer l’instant dans l’éternité de la matière.</p>
                </div>
                <div class="w-full md:w-7/12 ml-8 mr-8">
                    <img src="{{ asset('images/pexels-judit-agusti-aranda-1000026-2362469.jpg') }}" alt="Sculptures" 
                        class="w-full h-64 md:h-[300px] object-cover rounded-lg shadow-lg"/>
                </div>
            </div>

            <!-- La Photographie -->
            <div class="flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-8">
                <div class="w-full md:w-7/12 ml-8 mr-8">
                    <img src="{{ asset('images/sunset-1853871_1280.jpg') }}" alt="Photographie" 
                        class="w-full h-64 md:h-[300px] object-cover rounded-lg shadow-lg"/>
                </div>
                <div class="w-full md:w-1/3 text-center md:text-left">
                    <h3 class="text-xl md:text-2xl font-semibold mb-2 md:mb-4">La Photographie</h3>
                    <p class="text-sm md:text-base text-gray-600">L'instant, transformant la lumière et les ombres en une émotion intemporelle.</p>
                </div>
            </div>

              <!-- art numérique -->
              <div class="flex flex-col-reverse md:flex-row items-center space-y-4 md:space-y-0 md:space-x-8 mb-8 md:mb-12 mr15">
                <div class="w-full md:w-1/3 text-center md:text-right">
                    <h3 class="text-xl md:text-2xl font-semibold mb-2 md:mb-4">Art Numérique</h3>
                    <p class="text-sm md:text-base text-gray-600">quand la technologie et la créativité fusionnent pour donner vie à l’imaginaire.</p>
                </div>
                <div class="w-full md:w-7/12 ml-8 mr-8">
                    <img src="{{ asset('images/the-art-cycle-art-numerique-mori-building-digital-art-museum-teamlab-borderless-1354x762.jpg') }}" alt="Sculptures" 
                        class="w-full h-64 md:h-[300px] object-cover rounded-lg shadow-lg"/>
                </div>
            </div>
        </section>

        <section class="bg-gray-100 py-16 text-center w-full">
            <div class="max-w-2xl mx-auto">
                <h2 class="text-3xl font-bold mb-6">Notre Vision</h2>
                <p class="text-lg text-gray-700 mb-8">ArtShare est plus qu'une simple galerie d'art. C'est un espace où l'art prend vie, où chaque œuvre raconte une histoire unique.</p>
                <a href="#" class="bg-gradient-to-tr from-pink-500 to-purple-700 text-white px-6 py-3 rounded-full hover:bg-pink-600 transition">En savoir plus</a>
            </div>
        </section>
    </div>
<x-footer/>