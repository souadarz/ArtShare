
<footer class="bg-black text-white">
    <div class="px-4 py-12 md:py-18">
        <div class="container mx-auto max-w-6xl grid grid-cols-1 md:grid-cols-4 gap-8">

            <div class="col-span-1">
                <h2 class="text-2xl font-bold mb-4">ArtShare</h2>
                <p class="text-gray-300">Une galerie dédiée à l'art contemporain</p>
            </div>

            <div class="col-span-1">
                <h3 class="text-lg font-semibold mb-4">NAVIGATION</h3>
                <nav>
                    <ul class="space-y-2">
                        <li><a href="/" class="text-gray-300 hover:text-white transition">Accueil</a></li>
                        <li><a href="{{ route('oeuvre.index') }}" class="text-gray-300 hover:text-white transition">Galerie</a></li>
                        <li><a href="" class="text-gray-300 hover:text-white transition">Artistes</a></li>
                        <li><a href="{{ route('tutoriels.index') }}" class="text-gray-300 hover:text-white transition">Tutoriels</a></li>
                        <li><a href="/notreVision" class="text-gray-300 hover:text-white transition">Notre Vision</a></li>
                    </ul>
                </nav>
            </div>

            <div class="col-span-1">
                <h3 class="text-lg font-semibold mb-4">Contact</h3>
                <div class="space-y-2">
                    <p class="text-gray-300">123 Rue de l'Art, Nador, Maroc</p>
                    <p class="text-gray-300">contact@artShare.com</p>
                </div>
            </div>

            <div class="col-span-1">
                <h3 class="text-lg font-semibold mb-4">Newsletter</h3>
                <form class="flex flex-col space-y-2 mr-4">
                    <input 
                        type="email" 
                        placeholder="Votre email" 
                        class="bg-white text-white px-3 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-white/30">
                </form>
            </div>
        </div>

        <div class="text-center mt-8 pt-4 border-t border-white/10 text-gray-400">
            © 2024 ArtShare Tous droits réservés.
        </div>
    </div>
</footer>
</body>
</html>