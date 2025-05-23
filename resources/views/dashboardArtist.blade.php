<x-header></x-header>
@if($user->showMessageProfile())
<div>
    <p>message</p>
</div>
@endif
<div class="container mx-auto px-4 py-10">

    <section class="mb-12 flex flex-col md:flex-row items-center justify-between">
        <div class="md:w-2/3 text-center md:text-left mb-8 md:mb-0">
            <h2 class="text-4xl font-bold mb-4">{{ $user->name }}</h2>
            <p class="text-lg text-gray-600 mb-6">Exprimez votre vision, exposez vos œuvres, et inspirez le monde entier.</p>
            <a href="/profile" class="bg-black text-white px-6 py-3 rounded-full hover:bg-gray-800 transition">Modifier mon profil</a>
        </div>
        <div class="md:w-1/3 flex justify-center">
            <div class="relative w-40 h-40 rounded-full overflow-hidden border-4 border-purple-200">
                @if(!empty($user->picture))
                <img src="/api/placeholder/400/400" alt="Photo de profil" class="object-cover w-full h-full" />
                <div class="absolute bottom-0 right-0 bg-gradient-to-tr from-pink-500 to-purple-700 rounded-full p-2 text-white">
                </div>
                @else
                <img src="https://avatar.iran.liara.run/public/boy" alt="Profile"
                    class="absolute bottom-0 right-0 bg-gradient-to-tr from-pink-500 to-purple-700 rounded-full p-2 text-white">
                @endif
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
            <h3 class="text-2xl font-semibold text-pink-600"></h3>
            <p class="text-gray-500 mt-2">Likes reçus</p>
        </div>
        <div class="bg-white shadow-lg rounded-xl p-6 text-center border border-gray-100 hover:shadow-xl transition">
            <h3 class="text-2xl font-semibold text-purple-600"></h3>
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