<x-header></x-header>
@if($user && $user->showMessageProfile())
<div>
    <!-- <p>message</p> -->
    <div class="w-full bg-gradient-to-r from-pink-100 to-purple-100 mb-8 rounded-xl shadow-sm">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center">
                <div class="flex-shrink-0 mr-4">
                    <div class="bg-gradient-to-tr from-pink-500 to-purple-700 rounded-full p-2 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>
                </div>
                <div>
                    <h3 class="font-medium text-purple-800">Profil incomplet</h3>
                    <p class="text-gray-600">Complétez votre profil d'artiste pour augmenter votre visibilité et permettre aux visiteurs de mieux vous connaître. <a href="{{ route('profile', Auth::id()) }}" class="text-purple-700 font-medium hover:underline">Compléter maintenant</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<div class="container mx-auto px-4 py-10">

    <section class="mb-12 flex flex-col md:flex-row items-center justify-between">
        <div class="md:w-2/3 text-center md:text-left mb-8 md:mb-0">
            <h2 class="text-4xl font-bold mb-4">{{ $user->name }}</h2>
            <p class="text-lg text-gray-600 mb-6">Exprimez votre vision, exposez vos œuvres, et inspirez le monde entier.</p>
            <a href="{{ route('profile', $user->id ) }}" class="bg-black text-white px-6 py-3 rounded-full hover:bg-gray-800 transition">Modifier mon profil</a>
        </div>
        <div class="md:w-1/3 flex justify-center">
            <div class="relative w-40 h-40 rounded-full overflow-hidden border-4 border-purple-200">
              
                <img src="{{ $user->artist?->picture ? asset('storage/' . $user->artist->picture) : asset('images/default-avatar.png') }}" alt="Photo de profil" class="object-cover w-full h-full" />
                <div class="absolute bottom-0 right-0 bg-gradient-to-tr from-pink-500 to-purple-700 rounded-full p-2 text-white">
                </div>
<!--               
                <img src="https://avatar.iran.liara.run/public/girl" alt="Profile"
                    class="absolute bottom-0 right-0 bg-gradient-to-tr from-pink-500 to-purple-700 rounded-full p-2 text-white">
              -->
            </div>
        </div>
</div>
</section>
<!-- statistiques -->
<section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
    <div class="bg-white shadow-lg rounded-xl p-6 text-center border border-gray-100 hover:shadow-xl transition">
        <h3 class="text-2xl font-semibold text-purple-700">{{ $oeuvres->count() }}</h3>
        <p class="text-gray-500 mt-2">Œuvres publiées</p>
    </div>
    <div class="bg-white shadow-lg rounded-xl p-6 text-center border border-gray-100 hover:shadow-xl transition">
        <h3 class="text-2xl font-semibold text-pink-600">{{ $totalLikes }}</h3>
        <p class="text-gray-500 mt-2">Likes reçus</p>
    </div>
    <div class="bg-white shadow-lg rounded-xl p-6 text-center border border-gray-100 hover:shadow-xl transition">
        <h3 class="text-2xl font-semibold text-purple-600">{{ $totalComments }}</h3>
        <p class="text-gray-500 mt-2">Commentaires</p>
    </div>
</section>

<!-- actions -->
<section class="mb-12">
    <h3 class="text-2xl font-bold mb-6">Actions</h3>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <a href="{{ route('oeuvresDartist') }}"
            class="bg-gradient-to-tr from-pink-500 to-purple-700 text-white text-center py-8 px-4 rounded-lg shadow-lg hover:shadow-xl transition group">
            <div class="text-4xl mb-2"></div>
            <h4 class="text-xl font-semibold mb-2">Mes œuvres</h4>
            <p class="text-sm opacity-80">Partagez votre nouvelle création avec le monde</p>
        </a>
        <a href="{{ route('tutorielsDartist') }}"
            class="bg-white text-purple-700 border border-purple-200 text-center py-8 px-4 rounded-lg shadow hover:shadow-xl transition group">
            <div class="text-4xl mb-2"></div>
            <h4 class="text-xl font-semibold mb-2">Mes tutoriel</h4>
            <p class="text-sm text-gray-600"></p>
        </a>
    </div>
</section>

<section class="text-center my-16 py-10 px-4 bg-gradient-to-tr from-pink-50 to-purple-50 rounded-2xl">
    <blockquote class="text-2xl font-semibold italic text-gray-700 max-w-2xl mx-auto">
        "L'art est le plus court chemin de l'homme à l'homme."
    </blockquote>
    <div class="mt-4 text-purple-700">— André Malraux</div>
</section>
</div>
<x-footer />