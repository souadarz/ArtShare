<x-header />
<div class="bg-gray-100 text-gray-900">
    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            <div class="relative group">
                <img src="{{ Storage::url($oeuvre->image) }}" alt="image de l'œuvre"
                    class="w-full h-auto rounded-lg shadow-lg transform transition duration-300 group-hover:scale-105">
            </div>

            <div>
                <div class="flex justify-between">
                    <h1 class="text-4xl font-bold text-gray-900">{{ $oeuvre->title }}</h1>
                    <span class="bg-pink-100 text-[#ec4899] px-3 py-1 rounded-full text-sm">{{ $oeuvre->category }}</span>
                </div>
                <p class="text-lg text-gray-600 mt-2">par <a href="#" class="text-purple-600 hover:underline">{{ $oeuvre->user->name }}</a></p>
                <p class="mt-4 text-gray-700">{{ $oeuvre->description }}</p>

                <!-- <div class="mt-6 flex items-center space-x-4">
                        <span class="text-xl font-semibold text-gray-800">Prix : 1 200 €</span>
                        <button class="px-6 py-2 bg-gradient-to-tr from-pink-500 to-purple-700 text-white rounded-full shadow-lg hover:opacity-90 transition">Acheter</button>
                    </div> -->
                <div class="mt-6 flex space-x-4">
                    <button class="flex items-center px-4 py-2 text-gray-700 border border-gray-300 rounded-full hover:bg-gray-200 transition">
                        ❤️ Ajouter aux favoris
                    </button>
                    <!-- <button class="flex items-center px-4 py-2 text-gray-700 border border-gray-300 rounded-full hover:bg-gray-200 transition">
                        🔄 Partager
                    </button> -->
                    <form action="{{ route('like.store', $oeuvre) }} " method="POST">
                        @csrf
                        @if(session('likePink') === true)
                        <button type="submit" class="flex items-center space-x-2 text-pink-500 hover:text-pink-700">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                            </svg>
                            <span>{{ $oeuvre->likes()->count()}}</span>
                        </button>
                        @else
                        <button type="submit" class="flex items-center space-x-2 text-gray-500 hover:text-pink-700">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                            </svg>
                            <span>{{ $oeuvre->likes()->count()}}</span>
                        </button>
                        @endif
                    </form>
                </div>
                <!-- Section Commentaires -->
                <h2 class="text-2xl font-bold text-gray-900 mt-12 mb-6">Commentaires</h2>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="space-y-4">
                        @foreach($oeuvre->comments->sortByDesc('created_at') as $comment)
                        <div class="border-b pb-4">
                            <div class="flex items-center justify-between mb-2">
                                <p class="font-semibold">{{ $comment->user->name }}</p>
                                <span class="text-gray-500 text-sm">{{ $comment->created_at->diffForHumans() }}</span>
                            </div>
                            <p class="text-gray-700">{{ $comment->content }}</p>
                        </div>
                        @endforeach
                    </div>
                    <form action="{{ route('comment.store', $oeuvre) }}" method="POST" class="mt-4">
                        @csrf
                        <textarea name="content" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="Ajouter un commentaire..."></textarea>
                        <button type="submit" class="mt-2 px-6 py-2 bg-purple-600 text-white rounded-full hover:bg-purple-700 transition">Commenter</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Section œuvres similaires -->
        <h2 class="text-2xl font-bold text-gray-900 mt-12 mb-6">Œuvres Similaires</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('images/art-1.jpg') }}" alt="Art similaire" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold">Titre de l'œuvre</h3>
                    <p class="text-sm text-gray-600">Nom de l'Artiste</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('images/art-2.jpg') }}" alt="Art similaire" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold">Titre de l'œuvre</h3>
                    <p class="text-sm text-gray-600">Nom de l'Artiste</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('images/art-3.jpg') }}" alt="Art similaire" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold">Titre de l'œuvre</h3>
                    <p class="text-sm text-gray-600">Nom de l'Artiste</p>
                </div>
            </div>
        </div>
    </div>
</div>
<x-footer />