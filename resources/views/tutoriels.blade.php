<x-header/>
<body class="bg-gray-100 text-gray-900">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-gray-900 text-center mb-8">Tutoriels et Ressources</h1>
        
        <section class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Tutoriels</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ asset('images/tutorial-1.jpg') }}" alt="Tutoriel 1" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">Introduction à la Peinture Acrylique</h3>
                        <p class="text-sm text-gray-600">Apprenez les bases pour débuter en peinture acrylique.</p>
                        <a href="#" class="text-purple-600 hover:underline">Lire plus</a>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ asset('images/tutorial-2.jpg') }}" alt="Tutoriel 2" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">Techniques de Dessin au Crayon</h3>
                        <p class="text-sm text-gray-600">Découvrez les techniques de base et avancées du dessin.</p>
                        <a href="#" class="text-purple-600 hover:underline">Lire plus</a>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ asset('images/tutorial-3.jpg') }}" alt="Tutoriel 3" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">Créer des Œuvres Numériques</h3>
                        <p class="text-sm text-gray-600">Un guide pour débuter avec les logiciels d’art numérique.</p>
                        <a href="#" class="text-purple-600 hover:underline">Lire plus</a>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Ressources Utiles</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold">Banques d’Images Gratuites</h3>
                    <p class="text-gray-700">Découvrez des sites proposant des images libres de droits pour vos créations.</p>
                    <a href="#" class="text-purple-600 hover:underline">Voir les sites</a>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold">Logiciels d’Art Numérique</h3>
                    <p class="text-gray-700">Liste des logiciels gratuits et payants pour créer des œuvres numériques.</p>
                    <a href="#" class="text-purple-600 hover:underline">Découvrir</a>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold">Forums et Communautés</h3>
                    <p class="text-gray-700">Rejoignez des groupes d’artistes pour partager vos créations et échanger des conseils.</p>
                    <a href="#" class="text-purple-600 hover:underline">Participer</a>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold">Livres et Cours en Ligne</h3>
                    <p class="text-gray-700">Accédez à une sélection de livres et de formations pour perfectionner votre art.</p>
                    <a href="#" class="text-purple-600 hover:underline">Explorer</a>
                </div>
            </div>
        </section>
    </div>
<x-footer/>
