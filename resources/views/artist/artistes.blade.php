<x-header />
<style>
    .bg-artistic {
        background-image: url('data:image/svg+xml;charset=utf8,%3Csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"%3E%3Cpath fill="%236D28D9" fill-opacity="0.05" d="M0,96L48,112C96,128,192,160,288,176C384,192,480,192,576,165.3C672,139,768,85,864,74.7C960,64,1056,96,1152,106.7C1248,117,1344,107,1392,101.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"%3E%3C/path%3E%3C/svg%3E');
        background-position: bottom;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
<section class="py-20 px-4 text-center overflow-hidden bg-artistic">

    <h1 class="text-5xl md:text-6xl font-display font-bold mb-4">
        <span class="bg-gradient-to-r from-pink-500 to-purple-700 text-transparent bg-clip-text">Nos Artistes</span>
    </h1>
    <p class="text-xl text-gray-700 max-w-2xl mx-auto">
        Explorez la diversité et le talent des artistes qui façonnent la communauté ArtShare
        et laissez-vous emporter par leur univers créatif.
    </p>

</section>

<section class="max-w-6xl mx-auto px-4 pb-20 mt-20">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
        @foreach($users as $user)
        <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow text-center p-8">
            <div class="text-center">
                @if($user->artist && $user->artist->picture)
                <img src="{{ asset('storage/' . $user->artist->picture) }}" alt="Nom de l'artiste"
                    class="w-40 h-40 mx-auto rounded-full object-cover shadow-md border-4 border-purple-500">
                @else
                <img src="" alt="Nom de l'artiste"
                    class="w-40 h-40 mx-auto rounded-full object-cover shadow-md border-4 border-purple-500">
                @endif
                <h3 class="mt-4 text-xl font-semibold">{{ $user->name }}</h3>
                @if($user->artist)
                <p class="text-gray-900 italic mb-2">{{ $user->artist->styleArtistique }}</p>
                <!-- <p class="text-gray-600 text-sm">{{ $user->artist->biographie }}</p> -->
                @endif
                <a href="#" class="inline-block mt-3 text-purple-600 hover:underline font-medium">Voir le profil</a>
            </div>
        </div>
        @endforeach
    </div>
</section>

<section class="py-20 relative overflow-hidden">

    <div class="text-center max-w-xl mx-auto relative z-10">
        <h2 class="text-3xl font-display font-bold mb-4">Vous êtes artiste ?</h2>
        <p class="text-gray-700 text-lg mb-8">Rejoignez notre communauté vibrante et partagez votre vision unique avec des passionnés du monde entier.</p>

        <a href="{{ route('register') }}" class="inline-flex px-8 py-4 overflow-hidden bg-white rounded-full bg-gradient-to-r  from-pink-500 to-purple-700">
            <span class=" text-white font-semibold">Rejoindre ArtShare</span>
            <svg class="w-5 h-5 ml-2 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
            </svg>
        </a>

    </div>
</section>

<x-footer />