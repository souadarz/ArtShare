<x-header />

<main class="container mx-auto px-4 py-10">
    <section class="mb-12 flex flex-col md:flex-row items-center justify-between">
        <div class="md:w-2/3 text-center md:text-left mb-8 md:mb-0">
            <h2 class="text-4xl font-bold mb-4">Mon Profil</h2>
            <p class="text-lg text-gray-600 mb-6">Personnalisez votre expérience et partagez qui vous êtes avec le monde entier.</p>
            <a href="{{ route('dashboardArtist') }}" class="bg-black text-white px-6 py-3 rounded-full hover:bg-gray-800 transition">Dashboard</a>
        </div>
        <div class="md:w-1/3 flex justify-center">
            <div class="relative w-40 h-40 rounded-full overflow-hidden border-4 border-purple-200">
                <!-- <img src="{{ $user->artist?->picture ? asset('storage/' . $user->artist->picture) : asset('images/https://avatar.iran.liara.run/public/girl') }}" alt="Photo de profil" class="object-cover w-full h-full" />
                <div
                    class="absolute bottom-0 right-0 bg-gradient-to-tr from-pink-500 to-purple-700 rounded-full p-2 text-white">
                </div> -->
                @if(!empty($user->artist->picture))
                <img src="{{ Storage::url($user->artist->picture) }}" alt="Photo de profil" class="object-cover w-full h-full" />
                <div class="absolute bottom-0 right-0 bg-gradient-to-tr from-pink-500 to-purple-700 rounded-full p-2 text-white">
                </div>
                @else
                <img src="https://avatar.iran.liara.run/public/girl" alt="Profile"
                    class="absolute bottom-0 right-0 bg-gradient-to-tr from-pink-500 to-purple-700 rounded-full p-2 text-white">
                @endif
            </div>
        </div>
    </section>

    <form class="profileForm" action="{{ route('profile.storeOrUpdate') }} " method="POST" enctype="multipart/form-data">
        @csrf
        <div class="space-y-8">
            <div class="bg-white shadow-lg rounded-xl p-8 border border-gray-100">
                <h2 class="text-2xl font-bold mb-6 text-gray-800 flex items-center">
                    <i data-feather="user" class="mr-3 text-purple-600"></i>
                    Informations personnelles
                </h2>
                <!-- info commun entre utilisateur et artiste -->
                <div class="grid md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Nom complet</label>
                        <input type="text" name="name"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-purple-600 transition"
                            placeholder="Votre nom" value="{{ $user->name }}">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input type="email" name="email"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-purple-600 transition"
                            placeholder="votre.email@example.com" value="{{ $user->email }}">
                    </div>
                </div>
                <div>
                    <label for="picture" class="block text-sm font-medium text-gray-700">Image personnelle</label>
                    <input type="file" id="picture" name="picture" accept="image/*"
                        class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-pink-50 file:text-pink-700 hover:file:bg-pink-100">
                </div>

            </div>

            <!-- info pour l'artiste -->
            <div id="artistSection" class="space-y-8">

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Biographie</label>
                    <textarea name="biographie" rows="4"
                        class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-purple-600 transition"
                        placeholder="Partagez quelques informations sur vous...">{{ $user->artist?->biographie }}</textarea>
                </div>

                <div class="bg-white shadow-lg rounded-xl p-8 border border-gray-100">
                    <h2 class="text-2xl font-bold mb-6 text-gray-800 flex items-center">
                        <i data-feather="map" class="mr-3 text-pink-600"></i>
                        Parcours artistique
                    </h2>
                    <textarea name="parcoursArtistique" rows="4"
                        class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-600 focus:border-pink-600 transition"
                        placeholder="Décrivez votre parcours en tant qu'artiste...">{{ $user->artist?->parcoursArtistique }}</textarea>
                </div>

                <div class="bg-white shadow-lg rounded-xl p-8 border border-gray-100">
                    <h2 class="text-2xl font-bold mb-6 text-gray-800 flex items-center">
                        <i data-feather="feather" class="mr-3 text-purple-600"></i>
                        Style artistique
                    </h2>
                    <textarea name="styleArtistique" rows="4"
                        class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-purple-600 transition"
                        placeholder="Décrivez votre style artistique...">{{ $user->artist?->styleArtistique }}</textarea>
                </div>

                <div class="bg-white shadow-lg rounded-xl p-8 border border-gray-100">
                    <h2 class="text-2xl font-bold mb-6 text-gray-800 flex items-center">
                        <i data-feather="star" class="mr-3 text-pink-600"></i>
                        Inspirations
                    </h2>
                    <textarea name="inspirations" rows="4"
                        class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-600 focus:border-pink-600 transition"
                        placeholder="Qui ou quoi vous inspire dans votre art...">{{ $user->artist?->inspirations }}</textarea>
                </div>
            </div>

            <div class="flex justify-end pt-4">
                <button type="submit"
                    class="bg-gradient-to-tr from-pink-500 to-purple-700 text-white px-6 py-3 rounded-full hover:shadow-lg transition flex items-center">
                    Enregistrer mon profil
                </button>
            </div>
        </div>
    </form>
</main>

<x-footer />