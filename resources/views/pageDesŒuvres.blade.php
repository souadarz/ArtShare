<x-header />
<div class="bg-gradient-to-tr from-pink-500 to-purple-700 text-white py-20">
    <div class="max-w-7xl mx-auto px-4">
        <h1 class="font-playfair text-4xl md:text-6xl font-bold text-center mb-6">
            Découvrez nos Œuvres
        </h1>
        <p class="text-center text-xl max-w-2xl mx-auto">
            Explorez notre collection unique d'œuvres d'art
        </p>
    </div>
</div>

<!-- Filtres -->
<div class="bg-white shadow-sm sticky top-0 z-10">
    <div class="max-w-7xl mx-auto px-4 py-4">
        <div class="flex flex-wrap gap-4 justify-center">
            <button class="filter-btn px-6 py-2 rounded-full bg-purple-600 text-white hover:bg-opacity-90 transition-colors " data-cat="tout">
                Tout
            </button>
            <button class=" filter-btn px-6 py-2 rounded-full border border-gray-300 hover:border-purple-600 hover:text-purple-600 transition-colors" data-cat="Peinture">
                Peinture
            </button>
            <button class="filter-btn px-6 py-2 rounded-full border border-gray-300 hover:border-purple-600 hover:text-purple-600 transition-colors" data-cat="Sculpture">
                Sculpture
            </button>
            <button class="filter-btn px-6 py-2 rounded-full border border-gray-300 hover:border-purple-600 hover:text-purple-600 transition-colors" data-cat="Photographie">
                Photographie
            </button>
            <button class="filter-btn px-6 py-2 rounded-full border border-gray-300 hover:border-purple-600 hover:text-purple-600 transition-colors" data-cat="Art Numérique">
                Art Numérique
            </button>
        </div>
    </div>
</div>
<div id="messageAucuneResult" class="text-center py-8 hidden text-gray-500">Aucun résultat trouvé pour cette catégorie</div>

<!-- les oeuvres -->
<div class="max-w-7xl mx-auto px-4 py-12">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

        @foreach($oeuvres as $oeuvre)
        <div class="artwork bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow" data-category="{{ strtolower($oeuvre->category->name) }}">
            <div class="aspect-w-4 aspect-h-3">
                <img src="{{ Storage::url($oeuvre->image) }}" alt="image d'oeuvre"
                    class="w-full h-full object-cover">
            </div>
            <div class="p-6">
                <div>
                    <h3 class="font-playfair text-xl font-bold mb-2">{{ $oeuvre->title }}</h3>
                    <div class="flex justify-between items-start mb-4">
                        <p class="text-pink-400 font-bold py-2">@ {{ $oeuvre->user->name }}</p>
                        <a href="{{ route('detailsŒuvres', $oeuvre->id) }}" class="px-4 py-2 bg-black text-white rounded-full hover:bg-gray-800 transition-colors">Voir détails</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>

    {{ $oeuvres->links() }}
</div>
<script>


        document.addEventListener('DOMContentLoaded', function() {

            const filterButtons = document.querySelectorAll('.filter-btn');
            const artworks = document.querySelectorAll('.artwork');
            const message = document.getElementById('messageAucuneResult');

            function filterOeuvres(category) {

                let hasVisibleArtwork = false;

                artworks.forEach(artwork => {
                    if (category === 'tout' || artwork.getAttribute('data-category') === category.toLowerCase()) {
                        artwork.style.display = '';
                        hasVisibleArtwork = true;
                    } else {
                        artwork.style.display = 'none';
                    }
                });

                if (hasVisibleArtwork) {
                    if (messageAucuneResult) message.style.display = 'none';
                } else {
                    if (messageAucuneResult) message.style.display = 'block';
                }
            }

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    filterButtons.forEach(btn => btn.classList.remove('active'));

                    this.classList.add('active');

                    filterButtons.forEach(btn => {
                        if (btn.classList.contains('active')) {

                            btn.classList.add('border-purple-600', 'text-purple-600');

                        } else {
                            btn.classList.remove('border-purple-600', 'text-purple-600');
                        }
                    });

                    const category = this.getAttribute('data-cat');
                    filterOeuvres(category);
                });
            });

            filterOeuvres('tout');
        });

</script>
<x-footer />