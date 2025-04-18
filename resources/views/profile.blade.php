<x-header />

<main class="container mx-auto px-4 py-10">
        <section class="mb-12 flex flex-col md:flex-row items-center justify-between">
            <div class="md:w-2/3 text-center md:text-left mb-8 md:mb-0">
                <h2 class="text-4xl font-bold mb-4">Mon Profil ArtShare</h2>
                <p class="text-lg text-gray-600 mb-6">Personnalisez votre expérience et partagez qui vous êtes avec le monde entier.</p>
                <!-- <button class="bg-black text-white px-6 py-3 rounded-full hover:bg-gray-800 transition">
          Modifier mon profil
        </button> -->
            </div>
            <div class="md:w-1/3 flex justify-center">
                <div class="relative w-40 h-40 rounded-full overflow-hidden border-4 border-purple-200">
                    <img src="/api/placeholder/400/400" alt="Photo de profil" class="object-cover w-full h-full" />
                    <div
                        class="absolute bottom-0 right-0 bg-gradient-to-tr from-pink-500 to-purple-700 rounded-full p-2 text-white">
                        <span class="text-xl">✏️</span>
                    </div>
                </div>
            </div>
        </section>

    <form >
        <div class="space-y-8">
            <div class="bg-white shadow-lg rounded-xl p-8 border border-gray-100">
                <h2 class="text-2xl font-bold mb-6 text-gray-800 flex items-center">
                    <i data-feather="user" class="mr-3 text-purple-600"></i>
                    Informations personnelles
                </h2>

                <div class="grid md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Nom complet</label>
                        <input type="text" name="name"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-purple-600 transition"
                            placeholder="Votre nom" value="Jean Dupont">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input type="email" name="email"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-purple-600 transition"
                            placeholder="votre.email@example.com" value="jean.dupont@example.com">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Biographie</label>
                    <textarea name="biography" rows="4"
                        class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-purple-600 transition"
                        placeholder="Partagez quelques informations sur vous..."></textarea>
                </div>
            </div>
        </div>
    </form>
</main>

<x-footer />