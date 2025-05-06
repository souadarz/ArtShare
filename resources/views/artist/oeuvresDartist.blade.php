<x-header />

<!-- <button class="absolute right-36 px-6 py-2 rounded-full border border-gray-300 hover:border-purple-600 hover:text-purple-600 transition-colors"> -->
<a href="{{ route('oeuvre.create') }}" class="absolute right-36 px-6 py-2 bg-black text-white rounded-full hover:bg-gray-800 transition-colors">
    Ajouter Oeuvre</a>
<!-- les oeuvres -->
<div class="max-w-7xl mx-auto px-4 py-12">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

        @foreach($oeuvres as $oeuvre)
        <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
            <div class="aspect-w-4 aspect-h-3">
                <img src="{{ Storage::url($oeuvre->image) }}" alt="image d'oeuvre"
                    class="w-full h-full object-cover">
            </div>
            <div class="p-6">
                <div class="flex flex-col mb-4">
                    <div>
                        <h3 class="font-playfair text-xl font-bold mb-2">{{ $oeuvre->title }}</h3>
                        <!-- <p class="text-gray-600">par {{ $oeuvre->user->name }}</p> -->
                    </div>
                    <!-- <button class="px-4 py-2 bg-black text-white rounded-full hover:bg-gray-800 transition-colors mt-6">
                            Voir détails
                        </button> -->
                    <div class="flex justify-end space-x-2">
                        <a href="{{ route('oeuvre.edit', $oeuvre->id) }}" class="px-4 py-2 bg-black text-white rounded-full hover:bg-gray-800 transition-colors">Modifier</a>
                        <a href="{{ route('oeuvre.delete', $oeuvre->id) }}" class="px-4 py-2 rounded-full border border-gray-300 hover:border-purple-600 hover:text-purple-600 transition-colors">supprimer</a>
                    </div>

                </div>
            </div>
        </div>
        @endforeach

    </div>

    <!-- Pagination -->
    <div class="flex justify-center mt-12 space-x-2">
        <button class="w-10 h-10 rounded-full bg-purple-600 text-white flex items-center justify-center">1</button>
        <button class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center hover:border-purple-600 hover:text-purple-600">2</button>
        <button class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center hover:border-purple-600 hover:text-purple-600">3</button>
        <button class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center hover:border-purple-600 hover:text-purple-600">...</button>
    </div>
</div>
<x-footer />